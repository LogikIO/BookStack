


<div class="page-editor flex-fill flex">

    {{ csrf_field() }}
    <div class="faded-small">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 faded">
                    <div class="action-buttons text-left">
                        <a onclick="$('body>header').slideToggle();" class="text-button text-primary">@icon('toggle-header')Toggle Header</a>
                    </div>
                </div>
                <div class="col-sm-8 faded">
                    <div class="action-buttons">
                        <a href="{{ back()->getTargetUrl() }}" class="text-button text-primary">@icon('close')Cancel</a>
                        <button type="submit" id="save-button" class="text-button  text-pos">@icon('save')Save Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="title-input page-title clearfix">
        <div class="input">
            @include('form/text', ['name' => 'name', 'placeholder' => 'Page Title'])
        </div>
    </div>
    <div class="edit-area flex-fill flex">
        <textarea id="html-editor" name="html" rows="5"
                  @if($errors->has('html')) class="neg" @endif>@if(isset($model) || old('html')){{htmlspecialchars( old('html') ? old('html') : $model->html)}}@endif</textarea>
        @if($errors->has('html'))
            <div class="text-neg text-small">{{ $errors->first('html') }}</div>
        @endif
    </div>
</div>