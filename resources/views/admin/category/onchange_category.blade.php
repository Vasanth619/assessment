@if($type == 'sub_category')
	
	  <option value="">Select Subcategory</option>
    @forelse($subcategories as $subcategory)
         <option value="{{ $subcategory['id'] }}">{{ $subcategory['name'] }}</option>
    @empty

    @endforelse


@endif