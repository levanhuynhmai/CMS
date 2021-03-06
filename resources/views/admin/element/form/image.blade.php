<div class="form-group">
    <label class="col-form-label" for="{{ $name }}">
        <i class="fa fa-image" aria-hidden="true"></i> {{ $text ?? trans('common.image_url') }}

        <span class="text-sm-left text-warning">
            (File max size upload {{ @config('constant.MAX_FILE_SIZE_UPLOAD') }} pixel)
        </span>
    </label>
    <div class="controls">
        <div class="input-group mb-3">
            <input type="file" onchange="previewImage(event, 'pathPreviewSingle{{ $name }}')" name="file"
                   class="form-control" id="inputGroupFile01">
        </div>

        <div class="preview-img">
            <ul class="list-unstyled">
                <li>
                    <img src="@if(!empty($image_url)){{ asset('storage'.$image_url) }}@endif"
                         class="img-table img-thumbnail"
                         id="pathPreviewSingle{{ $name }}"/>

                    @if(!empty($image_url))
                        <br/>
                        <label class="text-danger">
                            <input type="checkbox" value="{{ $image_id }}" name="file_remove">
                            <i class="fa fa-trash"></i>
                        </label>
                    @endif
                </li>
            </ul>
        </div>
    </div>
</div>

