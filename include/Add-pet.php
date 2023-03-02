<!-- BASIC LAYOUT -->
              <div class="row">
                <div class="col-lg-6 col-md-12">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Pet Details</h5>
                      <small class="text-muted float-end">Default label</small>
                    </div>
                    <div class="card-body">
                      <form>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-fullname">BREED NAME</label>
                          <input type="text" class="form-control" id="basic-default-fullname" placeholder="Enter breed name" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-company">AGE</label>
                          <input type="text" class="form-control" id="basic-default-company" placeholder="Enter pet age" />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-DETAILS">DETAILS</label>
                          <div class="input-group input-group-merge">
                            <input type="text" id="basic-default-DETAILS" class="form-control" placeholder="DETAILS" aria-label="DETAILS" aria-describedby="basic-default-DETAILS"/>
                            <span class="input-group-text" id="basic-default-DETAILS"></span>
                          </div>
                          <div class="form-text">You can use letters, numbers & periods</div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-COST">COST</label>
                          <input
                            type="text"
                            id="basic-default-COST"
                            class="form-control COST-mask"
                            placeholder="Enter cost"
                          />
                        </div>
                        <div class="mb-3">
                          <label class="form-label" for="basic-default-message">PET IMAGE</label>
                          <input type="file" id="image" name="image" aria-describedby="defaultFormControlHelp"  class="form-control" onclick="clearimagevalidation()">
                          <span id="validateimage" class="text-danger"></span>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
                </div>