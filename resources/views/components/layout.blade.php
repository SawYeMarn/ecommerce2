<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary: "#0285FF",
              secondary: "#20283F",
            },
          },
        },
      };
    </script>
  </head>
  <body>
    <div
      class="flex items-center justify-between xl:px-32 sm:px-5 px-2 bg-secondary"
    >
      <a href="/">
        <img
          src="/cc.jpg"
          class="md:w-[150px] w-[100px] h-[80px] object-cover md:h-[12 0px]"
        />
      </a>
      <div class="flex items-center gap-5">
        <div class="flex items-center cursor-pointer text-white">
          <div class="flex items-center">
            <p
              class="w-[25px] rounded-full flex text-sm items-center justify-center h-[25px] bg-primary"
            >
              0
            </p>
            <svg
              class="md:w-[50px] w-[30px] h-[50px] md:h-[80px]"
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M6.616 21q-.691 0-1.153-.462T5 19.385V8.615q0-.69.463-1.152T6.616 7H8.5v-.5q0-1.458 1.021-2.479T12 3t2.479 1.021T15.5 6.5V7h1.885q.69 0 1.152.463T19 8.616v10.769q0 .69-.463 1.153T17.385 21zM9.5 7h5v-.5q0-1.056-.722-1.778T12 4t-1.778.722T9.5 6.5zm5.5 4q.214 0 .357-.143t.143-.357V8h-1v2.5q0 .214.143.357T15 11m-6 0q.214 0 .357-.143T9.5 10.5V8h-1v2.5q0 .214.143.357T9 11"
              />
            </svg>
          </div>
          <p>Your Cart</p>
        </div>
        
        <div v-else class="md:flex hidden items-center gap-3">
          <a
            href="/login.html"
            class="px-8 py-4 font-bold rounded-lg bg-primary text-white"
          >
            Login
          </a>
          <a
            href="/register.html"
            class="px-8 py-4 font-bold rounded-lg text-primary border-2 border-primary"
          >
            Register
          </a>
        </div>
      </div>
    </div>
  
    {{ $slot }}
  

    <div
      class="bg-secondary xl:px-32 sm:px-5 px-2 grid gap-y-10 xl:grid-cols-5 gap-4 md:grid-cols-3 py-20 text-white"
    >
      <div>
        <h1 class="text-lg font-bold">Menu</h1>
        <ul class="mt-6 gap-2 font-semibold flex flex-col">
          <li>
            <a href="/home.html">Home</a>
          </li>
          <li>
            <a href="/home.html">Beauty</a>
          </li>
          <li>
            <a href="/home.html">Clothes</a>
          </li>
          <li>
            <a href="/home.html">Food</a>
          </li>
        </ul>
      </div>
      <div class="col-span-2">
        <h1 class="text-lg font-bold">Popular Products</h1>
        <div class="mt-6 grid md:grid-cols-2 gap-4">
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="xl:col-span-2 md:col-span-3">
        <div class="bg-[#383E52] flex flex-col items-center p-10 rounded-xl">
          <h1 class="text-lg font-extrabold mb-2">
            Get 10% OFF of your first purchase
          </h1>
          <div
            class="xl:w-full md:w-[50%] w-full h-[55px] bg-white rounded-full"
          >
            <input
              class="w-full h-full text-black text-sm pl-6 bg-transparent border-none outline-none focus:ring-0"
              placeholder="Enter your email address"
            />
          </div>
          
          <button
            class="xl:w-full md:w-[50%] w-full h-full bg-primary rounded-full py-4 font-bold mt-3"
          >
            Subscribe
          </button>
        </div>
      </div>
    </div>
  
  </body>
</html>
