  <div class="product_section mb-80 wow fadeInUp" data-wow-delay="0.1s" data-wow-duration="1.1s">
      <div class="container">
          <div class="product_header">
              <div class="section_title text-center">
                  <h2>{{ $title }}</h2>
              </div>
          </div>
          <div class="tab-content product_container">
              <div class="tab-pane fade show active" id="features" role="tabpanel">
                  <div class="product_gallery">
                      <div class="row">
                          @foreach ($products as $item)
                              <div class="col-lg-3 col-md-4 col-sm-6">
                                  <article class="single_product">
                                      <figure>
                                          <div class="product_thumb">
                                              <a href="{{ $item->url() }}" ratio="1x1" class="bakery-ratio"><img
                                                      src={{ $item->image }} alt=""></a>
                                              <div class="action_links">
                                                  <ul class="d-flex justify-content-center">
                                                      <li class="add_to_cart">
                                                          <span wire:click="addToCart({{ $item->id }})"
                                                              class="pe-7s-shopbag"></span>
                                                      </li>
                                                      <li class="wishlist"><a href="wishlist.html"
                                                              title="Add to Wishlist"><span
                                                                  class="pe-7s-like"></span></a>
                                                      </li>
                                                      <li class="quick_button"><a href="#" title="Quick View"
                                                              data-bs-toggle="modal" data-bs-target="#modal_box">
                                                              <span class="pe-7s-look"></span></a></li>
                                                  </ul>
                                              </div>
                                          </div>
                                          <figcaption
                                              class="product_content text-center flex-grow-1 d-flex flex-column justify-content-between">
                                              <h4 class="text-truncate"><a
                                                      href="single-product.html">{{ $item->name }}</a></h4>
                                              <div class="price_box ">
                                                  <span class="current_price">{{ $item->price }}</span>
                                              </div>
                                          </figcaption>
                                      </figure>
                                  </article>
                              </div>
                          @endforeach
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
