<div class="tab-pane fade" id="stateplacement" role="tabpanel" aria-labelledby="pills-product-tab">
      <div class="container-fluid">
        <!-- <h2 class="mb-3 font-weight-bold">Product</h2> -->
        <form method="POST" action="">
                <div class="fields">
                    <div class="field">
                        <label for="state">Select State</label>
                        <select class="form-control" name="state" id="state" placeholder="Pick State" onchange="show(this)">
                        </select>
                    </div>
                    <div class="field" id="slga1" style="display: none;">
                        <label for="slga">Select Local Government</label>
                        <select class="form-control" name="slga" id="slga" placeholder="State LGA">
                        </select>
                    </div>
                    <!-- <div class="field">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" rows="3"></textarea>
                    </div> -->
                </div>
                <ul class="actions">
                    <li><input type="submit" name="next" value="Next"></li>
                </ul>
			</form>
      </div>
    </div>