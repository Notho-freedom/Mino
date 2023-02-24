                      <!-- comment collapse -->
                      <h2 class="accordion-header" id="headingTwo">
                        <div class=" accordion-button collapsed pointer d-flex justify-content-end
                          " data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1"
                        >
                          <p class="m-0">Comments</p>
                        </div>
                      </h2>
                      <hr />












                      <!-- comment & like bar -->


                  <div class="d-flex justify-content-around">

                    <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer text-muted p-1" 
                    onclick="like(event)" id="<?= $post['id'] ?>">
                    <i class="fas fa-thumbs-up me-3"></i>
                    <p class="m-0"><span id="<?= $post['id'].'l' ?>"><?= $post['liked']." "; ?></span>Like</p>
                    </div>

                    <div class=" dropdown-item rounded d-flex justify-content-center align-items-center pointer text-muted p-1"
                    data-bs-toggle="collapse" data-bs-target="#collapsePost1" aria-expanded="false" aria-controls="collapsePost1"

                    onclick="comments(event)" id="<?= $post['id'].'c' ?>">
                    <i class="fas fa-comment-alt me-3"></i>
                    <p class="m-0"> <?= $post['nc']." ";?> Comment</p>

                    </div>

                  </div>





                    <div
                        id="collapsePost1"
                        class="accordion-collapse collapse"
                        aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample"
                      >
                        <hr />
                        <div class="accordion-body">
                          <?php include ("fc.php"); ?>
                          <!-- create comment -->
                        <form class="d-flex my-1" method="POST" action="comments.php?st_id=<?= $post['id']; ?>">
                            <!-- avatar -->
                            <div>
                              <img
                                src="<?= URL . $__User->getAvatar($_SESSION['guid']) ?>"
                                alt="avatar"
                                class="rounded-circle me-2"
                                style="width: 38px;height: 38px;object-fit: cover;"
                              />
                            </div>
                            <!-- input -->
                            <input
                              type="text"
                              class="form-control border-0 rounded-pill bg-gray"
                              placeholder="Write your comment"
                              name='comment'
                              required
                            />
                          </form>
                          <!-- end -->
                        </div>
                      </div>

                      