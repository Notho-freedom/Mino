            <div class="input-group ms-2" type="button">
              <!-- mobile -->
              <span
                class="input-group-prepend d-lg-none"
                id="searchMenu"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-auto-close="outside"
              >
                <div
                  class="input-group-text bg-gray border-0 rounded-circle"
                  style="min-height: 40px"
                >
                  <i class="fas fa-search text-muted"></i>
                </div>
              </span>
              <!-- desktop -->
              <span
                class="input-group-prepend d-none d-lg-block"
                id="searchMenu"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                data-bs-auto-close="outside"
              >
                <div
                  class="input-group-text bg-gray border-0 rounded-pill"
                  style="min-height: 40px; min-width: 230px">
                  <i class="fas fa-search me-2 text-muted"></i>
                  <p class="m-0 fs-7 text-muted">Search Mino..</p>
                </div>
              </span>
              <!-- search menu -->
              <ul
                class="dropdown-menu overflow-auto border-0 shadow p-3"
                aria-labelledby="searchMenu"
                style="width: 20em; max-height: 600px"
              >
                <!-- search input -->
                <li>
                  <input
                    type="text"
                    class="rounded-pill border-0 bg-gray dropdown-item"
                    placeholder="Search Mino..."
                    style="background-color: grey !important;border: none !important;border-color: transparent !important;"
                    autofocus
                  />
                </li>
                <!-- search 1 -->
                <li class="my-4">
                  <div
                    class="
                      alert
                      fade
                      show
                      dropdown-item
                      p-1
                      m-0
                      d-flex
                      align-items-center
                      justify-content-between
                    "
                    role="alert"
                  >
                    <div class="d-flex align-items-center">
                      <img
                        src="https://source.unsplash.com/random/1"
                        alt="avatar"
                        class="rounded-circle me-2"
                        style="width: 35px; height: 35px; object-fit: cover"
                      />
                      <p class="m-0">Lorem ipsum yo</p>
                    </div>
                    <button
                      type="button"
                      class="btn-close p-0 m-0"
                      data-bs-dismiss="alert"
                      aria-label="Close"
                    ></button>
                  </div>
                </li>
              </ul>
            </div>