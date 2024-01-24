<div id="product">
    <h1 class="text-2xl mt-14 font-semibold">Product kita</h1>
    <div class="h-1 w-20 mt-2 mb-3 bg-orange-700"></div>
    <div class="flex justify-around flex-wrap">

        <div class="flex flex-col gap-2 p-5 shadow-lg  rounded-xl">
            <div class="flex justify-center">

                <img src="/img/product.png" class="w-28" alt="">
            </div>
            <h3 class="text-lg font-bold cursor-pointer" onclick="my_modal_2.showModal()">Kopi Hitam</h3>
            <span class="text-xs max-w-56">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero voluptatibus esse provident sed iusto dicta?</span>
            <h1 class="text-sm font-bold">Rp 5000</h1>
            <div class="flex max-w-10 gap-2">
                <button class="px-7 py-2 bg-white text-orange-700 border border-orange-700 rounded-lg" onclick="my_modal_2.showModal()">Detail</button>
                <a href="/buy" class="px-10 py-2 bg-orange-700 text-white rounded-lg">Beli</a>
            </div>
            <dialog id="my_modal_2" class="modal modal-middle">
                <div class="modal-box flex flex-wrap justify-around lg:max-w-3xl lg:flex-nowrap hero">
                    {{-- <div class="flex justify-center">

                        <img src="/img/product.png" class="object-contain" alt="">
                        
                        
                    </div>
                    <div class="max-w-md">

                        <h3 class="text-2xl font-bold ">Kopi Hitam</h3>
                        <h1 class="text-base font-bold my-3">Rp 5000</h1>
                        <article class="text-xs">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, debitis. Nesciunt voluptates ab explicabo placeat. Assumenda deserunt rem nihil aliquam omnis qui excepturi. Suscipit ducimus, officiis facere nobis dolor tenetur labore ipsa id itaque officia unde quos! Voluptas vel, saepe, assumenda et temporibus sit nulla tempore nesciunt veniam earum, quibusdam amet deserunt aspernatur eius. Vero voluptatum id similique perferendis asperiores. Molestias maiores architecto quo similique porro quam vitae, odio voluptatum ipsa, vero, deleniti alias? Ab laboriosam pariatur tempora voluptas, saepe omnis. Fugiat, fugit distinctio voluptate placeat porro atque praesentium quibusdam quisquam suscipit minus, laborum ducimus non, officiis saepe exercitationem deserunt!</article>
                        
                        <div class="modal-action">
                            <a href="#" class="btn">Yay!</a>
                        </div>
                    </div> --}}
                    <div class="hero-content flex-col lg:flex-row">
                        <img src="/img/product.png" class="max-w-xl" />
                        <div>
                          <h1 class="text-2xl font-bold">Box Office News!</h1>
                          <h3 class="text-base font-bold my-3">Rp 5000</h3>
                          <p class="py-6 text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus obcaecati atque ducimus odit, dolorum natus non! Esse mollitia nesciunt eos odio pariatur quos officia nobis omnis earum, dolores doloremque fugit! Iste, soluta laudantium obcaecati corporis vel repudiandae possimus nulla ratione reiciendis illo laboriosam hic dolores, ipsum architecto mollitia quae maxime. Quas omnis distinctio neque sed quam aut enim consequuntur, corporis aspernatur ab, debitis explicabo reiciendis repellendus nostrum magni. Ea, placeat dolor laudantium iure amet obcaecati quidem neque. Voluptates quo nesciunt voluptatum porro quia totam asperiores quasi inventore rem veritatis reiciendis qui, sequi dolorem harum! Suscipit eum quia expedita fugit dolor!</p>
                          {{-- <form method="post" class="flex items-center gap-5">
                            @csrf
                            <div class="quantity">
                                <button class="bg-gray-300 px-2 py-1 rounded-l-md" type="button" onclick="decrementQuantity()">-</button>
                                <input 
                                  type="text" 
                                  id="quantity" 
                                  name="quantity" 
                                  class="mx-2 p-2 border rounded-md w-14 h-6 text-center"
                                  value="1"
                                  readonly
                                >
                                <button class="bg-gray-300 px-2 py-1 rounded-r-md" type="button" onclick="incrementQuantity()">+</button>
                            </div>
                            
                            <button class="btn bg-orange-700 text-white" type="submit">Beli</button>
                          </form> --}}
                          <a href="/buy" class="btn bg-orange-700 text-white">beli</a>
                        </div>
                      </div>
                </div>
                <form method="dialog" class="modal-backdrop">
                  <button>close</button>
                </form>
            </dialog>

        </div>
        
        
        
        
    </div>
</div>

