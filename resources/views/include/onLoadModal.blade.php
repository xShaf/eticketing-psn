<div class="modal fade" id="notisPopUp" tabindex="-1" aria-labelledby="notisPopUp" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="notisPopUpLabel">Notis</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @php
                    $latestNoticeImage = app('App\Http\Controllers\NoticeController')->showLatest();
                @endphp

                @if ($latestNoticeImage)
                    <img src="{{ $latestNoticeImage }}" alt="Latest Notice Image"
                        style="max-width: 100%; max-height: 100%">

                @else
                    <p>No latest notice image available</p>
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
