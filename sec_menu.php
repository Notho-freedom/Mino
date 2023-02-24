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
              id="secondMenu"
              data-bs-toggle="dropdown"
              aria-expanded="false"
              data-bs-auto-close="outside"
            >
              <i class="fas fa-caret-down"></i>
            </div>
            <!-- secondary menu dd -->
            <ul
              class="dropdown-menu border-0 shadow p-3"
              aria-labelledby="secondMenu"
              style="width: 23em"
            >
              <!-- avatar -->
<form method="POST" action="av.php">
<li class="dropdown-item p-1 rounded d-flex" title="click on this picture to change">

<span class="image-upload">
<label for="av">
<input id="av" type="file" name="avt" class="hide-upload" onchange="test_av(event)"/>
<img src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>" alt="avatar" class="rounded-circle me-2" style="width: 45px; height: 45px; object-fit: cover"/>
<i class="fas fa-camera position-absolute" style="margin-left: -30px;top: 57px !important;"></i>
</label>
</span>

<div class="me-2" style="margin-left:30px;">
<p class="m-0"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
<p class="m-0 text-muted">See your profile</p>
</div>
<button type="submit" class="btn btn-primary pull-right d-none" id="subav" name='avatar'>Change</button>
</li>
</form>
              <hr />
              <!-- feedback -->
              <li
                class="dropdown-item p-1 rounded d-flex align-items-center"
                type="button"
              >
                <i
                  class="fas fa-exclamation-circle bg-gray p-2 rounded-circle"
                ></i>
                <div class="ms-3">
                  <p class="m-0">Give Feedback</p>
                  <p class="m-0 text-muted fs-7">
                    Help us improve the new Mino.
                  </p>
                </div>
              </li>
              <hr />
              <!-- options -->
              <!-- 1 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="d-flex" data-bs-toggle="dropdown">
                      <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                        <p class="m-0">Settings & Privacy</p>
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </div>
                    <!-- nested menu -->
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-cog"></i>
                          </div>
                          <p class="m-0">Settings</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-lock"></i>
                          </div>
                          <p class="m-0">Privacy Checkup</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-unlock-alt"></i>
                          </div>
                          <p class="m-0">Privacy Shortcuts</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-list"></i>
                          </div>
                          <p class="m-0">Activity Log</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-newspaper"></i>
                          </div>
                          <p class="m-0">News Feed Preferences</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-globe"></i>
                          </div>
                          <p class="m-0">Language</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- 2 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="d-flex" data-bs-toggle="dropdown">
                      <i
                        class="
                          fas
                          fa-question-circle
                          bg-gray
                          p-2
                          rounded-circle
                        "
                      ></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                        <p class="m-0">Help & Support</p>
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </div>
                    <!-- nested menu -->
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-cog"></i>
                          </div>
                          <p class="m-0">Settings</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-lock"></i>
                          </div>
                          <p class="m-0">Privacy Checkup</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-unlock-alt"></i>
                          </div>
                          <p class="m-0">Privacy Shortcuts</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-list"></i>
                          </div>
                          <p class="m-0">Activity Log</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-newspaper"></i>
                          </div>
                          <p class="m-0">News Feed Preferences</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-globe"></i>
                          </div>
                          <p class="m-0">Language</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- 3 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <div class="d-flex" data-bs-toggle="dropdown">
                      <i class="fas fa-moon bg-gray p-2 rounded-circle"></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                        <p class="m-0">Display & Accessibility</p>
                        <i class="fas fa-chevron-right"></i>
                      </div>
                    </div>
                    <!-- nested menu -->
                    <ul class="dropdown-menu">
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-cog"></i>
                          </div>
                          <p class="m-0">Settings</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-lock"></i>
                          </div>
                          <p class="m-0">Privacy Checkup</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-unlock-alt"></i>
                          </div>
                          <p class="m-0">Privacy Shortcuts</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-list"></i>
                          </div>
                          <p class="m-0">Activity Log</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-newspaper"></i>
                          </div>
                          <p class="m-0">News Feed Preferences</p>
                        </a>
                      </li>
                      <li>
                        <a
                          class="dropdown-item d-flex align-items-center"
                          href="#"
                        >
                          <div
                            class="
                              rounded-circle
                              p-1
                              bg-gray
                              d-flex
                              align-items-center
                              justify-content-center
                              me-2
                            "
                            style="width: 38px; height: 38px"
                          >
                            <i class="fas fa-globe"></i>
                          </div>
                          <p class="m-0">Language</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <!-- 4 -->
              <li class="dropdown-item p-1 my-3 rounded" type="button">
                    <a
                      href="./logout.php"
                      class="d-flex text-decoration-none text-dark"
                    >
                      <i class="fas fa-cog bg-gray p-2 rounded-circle"></i>
                      <div
                        class="
                          ms-3
                          d-flex
                          justify-content-between
                          align-items-center
                          w-100
                        "
                      >
                      <p class="m-0">Log Out</p>
                      </div>
                    </a>
              </li>
            </ul>