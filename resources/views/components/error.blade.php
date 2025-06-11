<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->

    @props(['field'])

    @error($field)
        <div class="text-danger small mt-1">
            {{ $message }}
        </div>
    @enderror

    
</div>
