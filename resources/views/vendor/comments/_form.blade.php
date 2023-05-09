<div class="card" style="background: rgba(255, 255, 255, 0)">
    <div class="card-body">
        @if($errors->has('commentable_type'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_type') }}
            </div>
        @endif
        @if($errors->has('commentable_id'))
            <div class="alert alert-danger" role="alert">
                {{ $errors->first('commentable_id') }}
            </div>
        @endif
        <form method="POST" action="{{ route('comments.store') }}" style="background: rgba(255, 255, 255, 0)">
            @csrf
            @honeypot
            <input type="hidden" name="commentable_type" value="\{{ get_class($model) }}" />
            <input type="hidden" name="commentable_id" value="{{ $model->getKey() }}" />

            {{-- Guest commenting --}}
            @if(isset($guest_commenting) and $guest_commenting == true)
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_name_here')</label>
                    <input style="border-radius: 10px"  type="text" class="form-control @if($errors->has('guest_name')) is-invalid @endif" name="guest_name" />
                    @error('guest_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="message">@lang('comments::comments.enter_your_email_here')</label>
                    <input style="border-radius: 10px" type="email" class="form-control @if($errors->has('guest_email')) is-invalid @endif" name="guest_email" />
                    @error('guest_email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            @endif

            <div class="form-group">
                <label for="message">@lang('comments::comments.enter_your_message_here')</label>
                <textarea style="border-radius: 20px" class="form-control @if($errors->has('message')) is-invalid @endif" name="message" rows="3"></textarea>
                <div class="invalid-feedback">
                    @lang('comments::comments.your_message_is_required')
                </div>
              
            </div>
            <button type="submit" class="btn btn-sm btn-outline-success text-uppercase">@lang('comments::comments.submit')</button>
        </form>
    </div>
</div>
<br />
