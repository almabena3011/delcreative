<div class="mb-3">
    <label for="{{ $field }}" class="form-label"><b>{{ $label }}</b></label>
    <textarea class="ckeditor form-control @error($field) is-invalid @enderror" name="{{ $field }}"
        id="{{ $field }}">
        @isset($value)
{!! old($field) ? old($field) : $value !!}
@else
{!! old($field) !!}
@endisset
    </textarea>
</div>
@error($field)
    <div style="color: red;">
        {{ $message }}
    </div>
@enderror

<script type="text/javascript">
    $(document).ready(function() {
        $('.ckeditor').ckeditor();
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace($field, {
        filebrowserUploadUrl: "{{ route('ckeditor.image-upload', ['_token' => csrf_token()]) }}",
        filebrowserUploadMethod: 'form'
    });
</script>
