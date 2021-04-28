<div style="display: flex; flex-wrap: wrap;">
    <div class="kt-subheader__main statistic-number" style="max-width: 500px; min-width: 350px; margin-bottom: 20px;">
        <style>
            .statistic-number span {
                margin-right: 10px;
            }
        </style>
        <span>Số bài: <b>{{ $statistic['total'] ?? 0 }}</b></span>
        <span>Enable: <b>{{ $statistic['enable'] ?? 0 }}</b></span>
        <span>Disble: <b>{{ $statistic['disable'] ?? 0 }}</b></span>
        <span>Draft: <b>{{ $statistic['draft'] ?? 0 }}</b></span>
        <span>Pending: <b>{{ $statistic['pending'] ?? 0 }}</b></span>
    </div>
    <div class="kt-subheader__main statistic-number" style="max-width: 500px; min-width: 350px; margin-bottom: 20px;">
        <style>
            .statistic-number span {
                margin-right: 10px;
            }
        </style>
        <span>Card 20: <b>{{ $statistic['card_20'] . '/2000' }}</b></span>
        <span>Card 50: <b>{{ $statistic['card_50'] . '/1000' }}</b></span>
    </div>
</div>