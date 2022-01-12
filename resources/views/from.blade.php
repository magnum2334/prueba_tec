<div class="container">
    <div class="card col-7 offset-3 my-3">
        <div class="card-body  ">
        <form action="{{ $url }}" method="POST">
            @method($method)
            @csrf
            <div class="form-group"> 
                <label class="form-label">{{ __('a')}}</label>
                <input type="text" name="a" id="a" required @error('a') is-invalid @enderror  class="form-control rounded-lg" placeholder="a"  >
            </div>

            <div class="form-group"> 
                <label class="form-label">{{ __('b')}}</label>
                <input type="text" name="b" id="a" required @error('b') is-invalid @enderror  class="form-control rounded-lg" placeholder="b" >
            </div>

            <div class=" form-group my-3">
                    @error('a')
                        <div class="alert alert-danger">{{ $message }} </div>
                    @enderror

                    @error('b')
                        <div class="alert alert-danger">{{ $message }} </div>
                    @enderror
            </div>
            <button type="submit" class="ml-3 btn btn-primary" >{{ __('Send')}}</button>   
        </form>
        </div>
    </div>
</div>