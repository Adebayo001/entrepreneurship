<div class="tab-pane fade" id="internship" role="tabpanel" aria-labelledby="pills-news-tab">
      <div class="container-fluid">
        <p style="color:red; font-size: 15px"><em>NOTE: Your internship placement centre must be in line with your field of study</em></p>
        <!-- <h2 class="mb-3 font-weight-bold">News</h2> -->
        <form method="post" action="" enctype="multipart/form-data">
          <div class="fields">
                            <div class="field">
              <label for="centre">Internship Centre</label>
              <input type="text" name="centre_name" placeholder="Business Name" required>
            </div>
                            <div class="field">
              <label for="address">Internship Address</label>
              <input type="text" name="centre_address" placeholder="Business Address" required>
            </div>
                            <div class="field">
              <label for="trainer">Trainer's Name</label>
              <input type="text" name="trainer_name" placeholder="Trainer's Full Name" required>
            </div>
            <div class="field">
              <label for="phone">Trainer's Phone Number</label>
              <input type="text" name="trainer_phone" placeholder="Trainer's Phone Number" required>
            </div>
            <div class="field">
              <label for="duration">Training Duration</label>
              <input type="text" name="duration" value="6 weeks" readonly>
            </div>
            <div class="field">
              <label for="work">Nature of Work</label>
              <textarea name="work_nature" cols="30" rows="4"  placeholder="Please give brief discription" required></textarea>
            </div>
                            <div class="field">
              <label for="image">Upload Your Passport Image</label>
              <input type="file" class="form-control" name="uploadfile" id="uploadfile" required>
            </div>
            <!-- <div class="field">
              <label for="message">Message</label>
              <textarea name="message" id="message" rows="3"></textarea>
            </div> -->
          </div>
          <ul class="actions">
            <li><input type="submit" name="submit" value="Submit" /></li>
          </ul>
        </form>
      </div>
    </div>