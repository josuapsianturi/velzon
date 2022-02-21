{{-- @dump($sproducts); --}}
@if ($sproducts->count() > 0 && $sale->status == 1)
<div class="w-full px-2 mt-10">
    <div class="text-left bg-pink-600 p-2">
        <div class="w-full text-2xl">On Sale</div>
        <div class="text-md text-gray-500" data-expire="{{ Carbon\Carbon::parse($sale->sale_date)->format('Y/m/d h:m:s') }}"></div>
    </div>

    <div class="carousel" data-flickity='{"autoPlay": true, "groupCells": true }'>
        {{-- On Sale --}}
        @foreach ($sproducts as $sproduct)
        <div class="carousel-cell max-w-xs rounded overflow-hidden shadow-lg my-2 mx-2 p-4 bg-white">
            <a href="{{ route('product.details', ['slug'=>$sproduct->slug]) }}" title="{{ $sproduct->name }}" class="font-bold text-xl mb-2 mt-4">Computers & Accessories
            <figure><img class="w-full" src="{{ asset('assets/images/products') }}/{{ $sproduct->image }} " alt="Sunset in the mountains"></figure>
           </a>
           <div class="px-2 py-4">
                <a href="{{ route('product.details', ['slug'=>$sproduct->slug]) }}" class="inline-block bg-grey-lighter text-sm text-blue-500">{{ $sproduct->name  }}</a>
            </div>
            <div class="px-2 py-4">
                <a href="{{ route('product.details', ['slug'=>$sproduct->slug]) }}" class="inline-block bg-grey-lighter text-sm text-blue-500">{{ $sproduct->sale_price  }}</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

