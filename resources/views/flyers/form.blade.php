@inject('countries', 'App\Http\Utilities\Country')

<div class="form-group">
    <label for="street">Street:</label>
    <input type="text" name="street" id="street" class="form-control" value="{{ old('street') }}">
</div>
<div class="form-group">
    <label for="city">City:</label>
    <input type="text" name="city" id="city" class="form-control" value="{{ old('city') }}">
</div>

<div class="form-group">
    <label for="zip"> Zip/ Podtal Code: </label>
    <input type="text" name="zip" id="zip" class="form-control" value="{{ old('zip') }}">
</div>
<div class="form-group">
    <label for="county">Country:</label>
    <select name="country" id="country" class="form-control">

        @foreach($countries::all() as $name => $code)
            <option value="{{ $code }}"> {{ $name }}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="state">State:</label>
    <input type="text" name="state" id="state" class="form-control" value="{{ old('state ') }}">
</div>
<div class="form-group">
    <label for="price">Sale Price :</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ old('price') }}">
</div>
<div class="form-group">
    <label for="description">Home Description :</label>
                    <textarea type="text" name="description" id="description" class="form-control" rows="10">

                        {{ old('description') }}
                    </textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Create Flyer</button>
</div>