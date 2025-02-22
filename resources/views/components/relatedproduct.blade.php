<a href="/products/{{$product->id}}">
                <div class="flex items-center gap-5 group cursor-pointer">
                  <div class="basis-[30%] h-auto rounded-xl overflow-hidden">
                    <img
                      class="w-full h-full group-hover:scale-[1.1] transition-all duration-200 object-cover"
                      src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                    />
                  </div>
                  <div class="basis-[70%]">
                    <p
                      class="text-lg group-hover:text-primary transition-all duration-200 font-semibold"
                    >
                      {{$product->name}}
                    </p>
                    <div class="flex items-center gap-2">
                      <p class="font-bold">{{$product->price}} MMK</p>
                    </div>
                  </div>
                </div>
              </a>