<label class="form-label" for="{{$model_name}}">{{ $title }}</label>
<input type="text" wire:model="{{$model_name}}" class="form-control @error($model_name) is-invalid @enderror" name="{{$model_name}}" placeholder="{{ $title }}">
@error($model_name)
<div class="invalid-feedback">{{ $message }}</div>
@enderror
