<div class="contact">
<h3>Get in touch today!</h3>
    <form action="#">
        <div class="row">
            <div class="col">
                <label class="label" for="fname">First Name:</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
            </div>
            <div class="col">
                <label class="label" for="lname">Last Name:</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name..">
            </div>
        </div>

        <div class="row">

            <div class="col">
                <label class="label" for="email">Email:</label>
                <input type="text" id="email" name="email" placeholder="Your Email address..">
            </div>

            <div class="col">
                <label class="label" for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" placeholder="Your Phone Number..">
            </div>
        </div>

        <div class="row">
            <div class="col subject">
                <!-- added subject to the col class so specific change can be made to this 
          col and not the rest -->
                <label class="label" for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" placeholder="Subject..">
            </div>
        </div>

        <div class="row message">
            <label class="label" for="message">Message:</label>
            <textarea id="message" name="message" placeholder="Please tell us what you'd like to order.." style="height:150px"></textarea>
        </div>

        <div class="rowgdpr">

            <input type="checkbox" id="gdpr" value="Agree" />
            <label class="labelgdpr">I have read and agree to the GDPR compliance</label>

        </div>

        <input class="button" type="submit" value="Submit">

    </form>
</div>

<div id="mapid"></div>