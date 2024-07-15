<section class="bg-slate-200 py-12">
  <div class="container mx-auto">
    <div class="product_heading text-center">
        <h3 class="text-3xl font-bold ">All Product</h3>
        <p class="text-lg text-opacity-20 ">Discover the perfect balance of performance and affordability with our latest smartphone.</p>
    </div>
    <div class="flex flex-wrap items-center justify-between py-12">
      @forelse ($frontend as $value)
        <div class="w-full md:w-1/4 p-4 mb-4 shadow-xl bg-white rounded" style="width: 24.2%">
          <img class="min-h-14" src="{{ asset('product/'.$value->photo ?? 'backend/images/bg-03.jpg') }}" alt="" class="w-full h-auto">
          <div class="rounded-lg p-4 flex flex-col">
            <h2 class="text-2xl font-bold">{{ $value->name ?? '' }}</h2>
            <h5 class="text-lg py-1">Category: <span class="text-pink-700 font-semibold">{{ $value->categories->category_name ?? '' }}</span></h5>
            <h6 class="text-xl pb-2">Price: ${{ $value->price ?? '' }}</h6>
            <button class="bg-blue-500 hover:bg-gray-900 text-white py-2 px-4 rounded">Buy Now</button>
          </div>
        </div>
      @empty
        <div class="text-xl text-center text-gray-900 font-semibold">Data Not Found</div>
      @endforelse
        
    </div>
  </div>
</section>

