            <div
              class="
                rounded-circle
                p-1
                bg-gray
                d-flex
                align-items-center
                justify-content-center
                mx-2
              "
              style="width: 38px; height: 38px"
              type="button"
              id="chatMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-auto-close="outside"
            >
              <i class="fas fa-comment"></i>
            </div>

            
            <ul
              class="dropdown-menu border-0 shadow p-3 overflow-auto"
              aria-labelledby="chatMenu"
              style="width: 23em; max-height: 600px"
            >
              <!-- header -->
              <li class="p-1">
                <div class="d-flex justify-content-between">
                  <h2>Message</h2>
                  <div>
                    <!-- setting -->
                    <i
                      class="fas fa-ellipsis-h text-muted mx-2"
                      type="button"
                      data-bs-toggle="dropdown"
                    ></i>
                    <!-- setting dd -->
                    <?php include ('chat_setting.php') ?>





                    <i
                      class="fas fa-expand-arrows-alt text-muted mx-2"
                      type="button"
                    ></i>
                    <!-- new message -->
                    <i
                      class="fas fa-edit text-muted mx-2"
                      type="button"
                      data-bs-toggle="modal"
                      data-bs-target="#newChat"
                    ></i>
                  </div>
                </div>
              </li>
              <!-- search -->
              <li class="p-1">
                <div
                  class="input-group-text bg-gray border-0 rounded-pill"
                  style="min-height: 40px; min-width: 230px"
                >
                  <i class="fas fa-search me-2 text-muted"></i>
                  <input
                    type="text"
                    class="form-control rounded-pill border-0 bg-gray"
                    placeholder="Search Messenger"
                    style="background-color: transparent !important;border: none !important;border-color: transparent !important;"
                  />
                </div>
              </li>

              <!-- message 1 -->
              <li
                class="my-2 p-1"
                type="button"
                data-bs-toggle="modal"
                data-bs-target="#singleChat1"
              >
                <div class="d-flex align-items-center justify-content-between">
                  <!-- big avatar -->
                  <div class="d-flex align-items-center justify-content-evenly">
                    <div class="p-2">
                      <img
                        src="https://source.unsplash.com/random/5"
                        alt="avatar"
                        class="rounded-circle"
                        style="width: 58px; height: 58px; object-fit: cover"
                      />
                    </div>
                    <div>
                      <p class="fs-7 m-0">Phu</p>
                      <span class="fs-7 text-muted"
                        >Lorem ipsum &#8226; 7d</span
                      >
                    </div>
                  </div>
                  <!-- small avatar -->
                  <div class="p-2">
                    <img
                      src="https://source.unsplash.com/random/5"
                      alt="avatar"
                      class="rounded-circle"
                      style="width: 15px; height: 15px; object-fit: cover"
                    />
                  </div>
                </div>
              </li>




              <hr class="m-0" />
              <a href="#" class="text-decoration-none">
                <p class="fw-bold text-center pt-3 m-0">See All in Messenger</p>
              </a>



            </ul>

