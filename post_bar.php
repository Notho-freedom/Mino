




              <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true" data-bs-backdrop="false">




                <div class="modal-dialog modal-dialog-centered">
                  <div class="modal-content">
                    <form method="POST" action="statut.php" enctype="multipart/form-data">
                    <!-- head -->
                    <div class="modal-header align-items-center">
                    <h5 class="text-dark text-center w-100 m-0" id="exampleModalLabel">Create Post </h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <!-- body -->
                    <div class="modal-body">
                      <div class="my-1 p-1">
                        <div class="d-flex flex-column">
                          <!-- name -->
                          <div class="d-flex align-items-center">
                            <div class="p-2">
                            <img src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>" alt="from fb" class="rounded-circle" style=" width: 38px; height: 38px; object-fit: cover; "/>
                            </div>
                            <div>
                              <p class="m-0 fw-bold"><?= $_SESSION['name']." ".$_SESSION['surname'] ?></p>
                              <select class="form-select border-0 bg-gray w-75 fs-7" aria-label="Default select example" name="view">
                                <option selected value="1">Public</option>
                                <option value="2">My Profil</option>
                                <option value="3">All</option>
                              </select>
                            </div>
                          </div>
                          <!-- text -->
                          <div>
                            <textarea
                              cols="30"
                              rows="5"
                              class="form-control border-0 pt-3"
                              placeholder="Enter your post here..."
                              id='post'
                              name="description"
                              style="justify-content: center;align-content: center;align-items: center;border-radius: 10px;"
                            ></textarea>
                          </div>
                          <!-- emoji  -->
                          <div class=" d-flex justify-content-between align-items-center">

                          <span class="image-upload btn btn-large">
                          <label for="text-color">
                          <input id="text-color" type="color" name="text_color" class="hide-upload"  onchange="color('imc','text-color')"/>
                        <img id='imc' src="https://www.facebook.com/images/composer/SATP_Aa_square-2x.png" class="pointer" alt="fb text" style="width: 30px;height: 30px;object-fit: cover;"/>
                          </label>
                          </span>
                          <span class="image-upload btn btn-large">
                          <label for="bg-color">
                          <input id="bg-color" type="color" name="bg_color" class="hide-upload" onchange="color('bg_c','bg-color')" />
                          <i id="bg_c" class="fas fa-fill-drip fs-5 text-muted pointer"></i>
                          </label>
                          </span>
                            <i class="far fa-laugh-wink fs-5 text-muted pointer"></i>
                          </div>
                          <!-- options -->
                          <div class=" d-flex justify-content-between border border-1 border-light rounded p-3 mt-3"><p class="m-0">Add to your post</p><div>

                          <span class="image-upload">
                          <label for="images">
                          <input id="images" type="file" name="file[]" class="hide-upload" multiple  onchange="test_images_videosp(event)"/>
                          <i class="fas fa-photo-video me-2 text-success"></i>
                          </label>

                          </span>
                          <i class=" fas fa-user-check fs-5 text-primary pointer mx-1 "></i> <i class=" far fa-smile fs-5 text-warning pointer mx-1 " ></i> <i class=" fas fa-map-marker-alt fs-5 text-info pointer mx-1 " ></i> <i class=" fas fa-microphone fs-5 text-danger pointer mx-1 " ></i> <i class=" fas fa-ellipsis-h fs-5 text-muted pointer mx-1 " ></i>
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- end -->
                    </div>
                    <!-- footer -->
                    <div class="modal-footer"><button type="submit" class="btn btn-primary w-100">Post</button></div></form>
                  </div>
                </div>





              </div>








              <hr />









              <!-- actions -->
          <?php include ('next_post_bar.php') ?>