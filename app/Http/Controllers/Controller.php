<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Response;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ajaxRespond($code, $message='', $data=[])
    {
        return Response::json([
            'code' => $code,
            'message' => $message,
            'data' => $data,
        ]);
    }
    public function processDataTable(Request $request, $items)
    {
        //Update list status field
        if ($request->ajax() && $request->action == 'update_status_list') {
            $this->authorize('permission', $this->route.'.publish');

            $ids = explode(",", $request->id);
            $this->baseModel->whereIn('id', $ids)->update(
                [$request->field => $request->value]
            );

            return $this->ajaxRespond(1, '', CommonHelper::statusGroup($request->field, $request->id, $request->value));
        }

        // Update status field
        if ($request->ajax() && $request->action == 'update_status') {
            $this->authorize('permission', $this->route.'.publish');

            $this->baseModel->find($request->id)->update(
                [$request->field => $request->value]
            );

            return $this->ajaxRespond(1, '', '');
        }

        // Update yesno field
        if ($request->ajax() && $request->action == 'update_yesno') {
            $this->baseModel->find($request->id)->update(
                [$request->field => $request->value]
            );

            return $this->ajaxRespond(1, '', CommonHelper::yesNoGroup($request->field, $request->id, $request->value));
        }

        // Update default field
        if ($request->ajax() && $request->action == 'update_default') {
            $this->baseModel->where('default', 1)->update(
                [$request->field => 0]
            );

            $this->baseModel->find($request->id)->update(
                [$request->field => 1]
            );

            return $this->ajaxRespond(1, '', CommonHelper::defaultGroup($request->field, $request->id, $request->value));
        }

        // Update ordering field
        if ($request->ajax() && $request->action == 'update_ordering') {
            $this->baseModel->setOrder($request->id, $request->value);

            return $this->ajaxRespond(1, '', CommonHelper::orderingBtn($request->field, $request->id, $request->value));
        }

        // Reload data table
        if ($request->ajax()) {
            return $this->ajaxRespond(
                1,
                '',
                view($this->route . '.index_table')
                    ->with('route', $this->route)
                    ->with('items', $items)
                    ->render()
            );
        }
    }
}
