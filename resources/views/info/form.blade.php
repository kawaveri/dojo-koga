<form action="{{ $action }}" method="POST">
  @method($method)
  @csrf

  <div class="field">
    <label class="label">タイトル</label>
    <div class="control">
      <input class="input @error('title') is-danger @enderror" type="text" name="title"
             value="{{ old('title', $info->title) }}">
    </div>
    @error('title')
    <p class="help is-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="field">
    <label class="label">本文</label>
    <div class="control">
            <textarea class="textarea @error('body') is-danger @enderror"
                      name="body">{{ old('body', $info->body) }}</textarea>
    </div>
    @error('body')
    <p class="help is-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="field">
    <label class="label">公開開始</label>
    <div class="control">
      <input class="input @error('open_at') is-danger @enderror" type="date" name="open_at"
             value="{{ old('open_at', optional($info->open_at)->format('Y-m-d')) }}">
    </div>
    @error('open_at')
    <p class="help is-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="field">
    <label class="label">公開終了</label>
    <div class="control">
      <input class="input @error('close_at') is-danger @enderror" type="date" name="close_at"
             value="{{ old('close_at', optional($info->close_at)->format('Y-m-d')) }}">
    </div>
    @error('close_at')
    <p class="help is-danger">{{ $message }}</p>
    @enderror
  </div>

  <div class="field is-grouped">
    <div class="control">
      <button class="button is-link">保存する</button>
    </div>
  </div>

</form>

