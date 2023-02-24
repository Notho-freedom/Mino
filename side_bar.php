        <div class="col-12 col-lg-3">
          <div
            class="d-none d-xl-flex d-xxl-block h-100 fixed-top overflow-hidden scrollbar"
            style="max-width: 280px !important; width: 100%; z-index: 4"
          >
            <ul
              class="navbar-nav mt-4 ms-3 d-flex flex-column pb-5 mb-5"
              style="padding-top: 56px"
            >
              <!-- top -->


              <!-- avatar -->
              <li class="dropdown-item p-1 rounded">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                  <div class="p-2">
                    <img
                      src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                      alt="avatar"
                      class="rounded-circle me-2"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0" title="<?= $_SESSION['actu'] ?>"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
                  </div>
                </a>
              </li>



              <!-- top 1 -->
              <li class="dropdown-item p-1 rounded">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/tSXYIzZlfrS.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Friends</p>
                  </div>
                </a>
              </li>



              <!-- top 2 -->
              <li class="dropdown-item p-1 rounded">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                  <div class="p-2">
                    <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Im_0d7HFH4n.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Groups</p>
                    <i class="fas fa-circle text-primary" style="font-size: 0.5rem !important"
                    ></i>
                    <span class="fs-7 text-primary"> 1 new</span>
                  </div>
                </a>
              </li>



              <!-- top 3 -->
              <li class="dropdown-item p-1">
                <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-dark">
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2"> <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/0gH3vbvr8Ee.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Pages</p>
                    </div>
                  </div>
                </a>
              </li>



              <!-- top 4 -->
              <li class="dropdown-item p-1">
                <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-dark">
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/MN44Sm-CTHN.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Marketplace</p>
                    </div>
                  </div>
                </a>
              </li>
              <!-- top 5 -->
              <li class="dropdown-item p-1">
                <a href="#" class="d-flex align-items-center justify-content-between text-decoration-none text-dark">
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img src="https://static.xx.fbcdn.net/rsrc.php/v3/y-/r/FhOLTyUFKwf.png" alt="from fb" class="rounded-circle" style="width: 38px; height: 38px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="m-0">Watch</p>
                      <i class="fas fa-circle text-primary" style="font-size: 0.5rem !important"
                      ></i>
                      <span class="fs-7 text-primary"> 9+ new videos</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- see more -->
              <li class="p-1" type="button">
                <div id="accordionFlushExample">
                  <div>
                    <!-- see more button -->
                    <div
                      class="d-flex align-items-center"
                      data-bs-toggle="collapse"
                      data-bs-target="#flush-collapseOne"
                      aria-expanded="false"
                      aria-controls="flush-collapseOne"
                    >
                      <div class="p-2"> <i class="fas fa-chevron-down rounded-circle p-2" style="background-color: #d5d5d5 !important"
                        ></i>
                      </div>
                      <div>
                        <p class="m-0">See More</p>
                      </div>
                    </div>
                    <!-- content -->
                    <div
                      id="flush-collapseOne"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div>
                        <!-- item 1 -->
                        <div class=" d-flex align-items-center dropdown-item p-0 m-0
                          "
                        >
                          <div class="p-2"> <img src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/Y7r38CcFEw5.png" alt="from fb" class="rounded-circle" style=" width: 38px; height: 38px; object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Campus</p>
                          </div>
                        </div>
                        <!-- item 2 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://static.xx.fbcdn.net/rsrc.php/v3/yx/r/N7UOh8REweU.png"
                              alt="from fb"
                              class="rounded-circle"
                              style=" width: 38px; height: 38px; object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Events</p>
                          </div>
                        </div>
                        <!-- item 3 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://static.xx.fbcdn.net/rsrc.php/v3/yo/r/hLkEFzsCyXC.png"
                              alt="from fb"
                              class="rounded-circle"
                              style=" width: 38px; height: 38px; object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Newsfeed</p>
                          </div>
                        </div>
                        <!-- end -->
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <hr class="m-0" />
              <!-- shortcuts -->
              <!-- heading -->
              <div
                class="
                  d-flex
                  justify-content-between
                  align-items-center
                  mt-2
                  text-muted
                  edit-heading
                "
              >
                <h4 class="m-0 pointer">Your Shorcuts</h4>
                <p
                  class="m-0 text-primary me-3 pointer edit-button"
                  type="button"
                  data-bs-toggle="modal"
                  data-bs-target="#shortCutModal"
                >
                  Edit
                </p>
                <!-- modal -->
                <div
                  class="modal fade"
                  id="shortCutModal"
                  tabindex="-1"
                  aria-labelledby="shortCutModalLabel"
                  aria-hidden="true"
                  data-bs-backdrop="false"
                >
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                      <!-- head -->
                      <div class="modal-header align-items-center">
                        <h5
                          class="text-dark text-center w-100 m-0"
                          id="exampleModalLabel"
                        >
                          Edit Your ShortCuts
                        </h5>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
                      </div>
                      <!-- body -->
                      <div class="modal-body">
                        <p class="text-muted">
                          Shortcuts provide quick access to what you do most on
                          Facebook. Your Shortcuts are sorted automatically, but
                          you can pin something so it's always shown at the top
                          or hide it from the list.
                        </p>
                        <!-- Search -->
                        <div class="p-1">
                          <div
                            class="
                              input-group-text
                              bg-gray
                              border-0
                              rounded-pill
                            "
                            style="min-height: 40px; min-width: 230px"
                          >
                            <i class="fas fa-search me-2 text-muted"></i>
                            <input
                              type="text"
                              class="form-control rounded-pill border-0 bg-gray"
                              placeholder="Search your Pages, groups, games, and events"
                            />
                          </div>
                        </div>
                        <!-- short-1 -->
                        <li class="my-1 p-1">
                          <div
                            class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            "
                          >
                            <div
                              class=" d-flex align-items-center justify-content-evenly
                              "
                            >
                              <div class="p-2"> <img src="https://source.unsplash.com/random/1" alt="from fb" class=" rounded border border-1 border-secondary
                                  "
                                  style=" width: 38px; height: 38px; object-fit: cover;
                                  "
                                />
                              </div>
                              <div>
                                <p class="m-0">Lorem Ipsum</p>
                              </div>
                            </div>
                            <select
                              class="form-select w-50 border-0 bg-gray"
                              aria-label="Default select example"
                            >
                              <option selected value="1">
                                Short Automatically
                              </option>
                              <option value="2">Pin To Top</option>
                              <option value="3">Hide</option>
                            </select>
                          </div>
                        </li>
                        <!-- short-2 -->
                        <li class="my-1 p-1">
                          <div
                            class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            "
                          >
                            <div
                              class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              "
                            >
                              <div class="p-2">
                                <img
                                  src="https://source.unsplash.com/random/2"
                                  alt="from fb"
                                  class=" rounded border border-1 border-secondary
                                  "
                                  style=" width: 38px; height: 38px; object-fit: cover;
                                  "
                                />
                              </div>
                              <div>
                                <p class="m-0">Lorem Ipsum</p>
                              </div>
                            </div>
                            <select
                              class="form-select w-50 border-0 bg-gray"
                              aria-label="Default select example"
                            >
                              <option selected value="1">
                                Short Automatically
                              </option>
                              <option value="2">Pin To Top</option>
                              <option value="3">Hide</option>
                            </select>
                          </div>
                        </li>
                        <!-- short-3 -->
                        <li class="my-1 p-1">
                          <div
                            class="
                              d-flex
                              align-items-center
                              justify-content-between
                              text-decoration-none text-dark
                            "
                          >
                            <div
                              class="
                                d-flex
                                align-items-center
                                justify-content-evenly
                              "
                            >
                              <div class="p-2">
                                <img
                                  src="https://source.unsplash.com/random/3"
                                  alt="from fb"
                                  class=" rounded border border-1 border-secondary
                                  "
                                  style=" width: 38px; height: 38px; object-fit: cover;
                                  "
                                />
                              </div>
                              <div>
                                <p class="m-0">Lorem Ipsum</p>
                              </div>
                            </div>
                            <select
                              class="form-select w-50 border-0 bg-gray"
                              aria-label="Default select example"
                            >
                              <option selected value="1">
                                Short Automatically
                              </option>
                              <option value="2">Pin To Top</option>
                              <option value="3">Hide</option>
                            </select>
                          </div>
                        </li>
                        <!-- end -->
                      </div>
                      <!-- footer -->
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn btn-light text-primary"
                          data-bs-dismiss="modal"
                        >
                          Close
                        </button>
                        <button type="button" class="btn btn-primary">
                          Save changes
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end -->
              </div>
              <!-- short 1 -->
              <li class="dropdown-item p-1">
                <a href="#" class="d-flex align-items-center text-decoration-none text-dark">
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/1"
                      alt="from fb"
                      class="rounded border border-1 border-secondary"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Lorem Ipsum</p>
                  </div>
                </a>
              </li>
              <!-- short-2 -->
              <li class="dropdown-item p-1">
                <a
                  href=""
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/2"
                      alt="from fb"
                      class="rounded border border-1 border-secondary"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Lorem Ipsum</p>
                  </div>
                </a>
              </li>
              <!-- short-3 -->
              <li class="dropdown-item p-1">
                <a
                  href=""
                  class="
                    d-flex
                    align-items-center
                    text-decoration-none text-dark
                  "
                >
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/3"
                      alt="from fb"
                      class="rounded border border-1 border-secondary"
                      style="width: 38px; height: 38px; object-fit: cover"
                    />
                  </div>
                  <div>
                    <p class="m-0">Lorem Ipsum</p>
                  </div>
                </a>
              </li>
              <!-- see more -->
              <li class="p-1" type="button">
                <div id="accordionFlushExample">
                  <div>
                    <!-- see more button -->
                    <div
                      class="d-flex align-items-center"
                      data-bs-toggle="collapse"
                      data-bs-target="#shortModal"
                      aria-expanded="false"
                      aria-controls="shortModal"
                    >
                      <div class="p-2">
                        <i
                          class="fas fa-chevron-down rounded-circle p-2"
                          style="background-color: #d5d5d5 !important"
                        ></i>
                      </div>
                      <div>
                        <p class="m-0">See More</p>
                      </div>
                    </div>
                    <!-- content -->
                    <div
                      id="shortModal"
                      class="accordion-collapse collapse"
                      aria-labelledby="flush-headingOne"
                      data-bs-parent="#accordionFlushExample"
                    >
                      <div>
                        <!-- item 1 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://source.unsplash.com/random/4"
                              alt="from fb"
                              class="rounded border border-1 border-secondary"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Campus</p>
                          </div>
                        </div>
                        <!-- item 2 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://source.unsplash.com/random/5"
                              alt="from fb"
                              class="rounded border border-1 border-secondary"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Events</p>
                          </div>
                        </div>
                        <!-- item 3 -->
                        <div
                          class="
                            d-flex
                            align-items-center
                            dropdown-item
                            p-0
                            m-0
                          "
                        >
                          <div class="p-2">
                            <img
                              src="https://source.unsplash.com/random/6"
                              alt="from fb"
                              class="rounded border border-1 border-secondary"
                              style="
                                width: 38px;
                                height: 38px;
                                object-fit: cover;
                              "
                            />
                          </div>
                          <div>
                            <p class="m-0">Newsfeed</p>
                          </div>
                        </div>
                        <!-- end -->
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!-- terms -->
          </div>
        </div>