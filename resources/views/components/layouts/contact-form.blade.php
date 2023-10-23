<div class="form" id="form">
    <form action="{{ route('contact.submit') }}" method="POST">
        @csrf
        <div class="checkbox">
            <label>
                <input type="checkbox" name="purpose[]" value="Distributor">
                Distributor
            </label>
            <label>
                <input type="checkbox" name="purpose[]" value="Agent">
                Agent
            </label>

        </div>
        <div class="input-form">
            <label for="name">First name:</label><br>
            <input type="text" id="name" name="name" placeholder="Your Name" required><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email" placeholder="Email Address" required><br>
            <label for="phone">Phone Number:</label><br>
            <input type="text" id="phone" name="phone" placeholder="Phone Number" required><br>
            <label for="textarea">Message</label><br>
            <textarea rows="4" cols="50" id="textarea" name="message" placeholder="Message" required></textarea><br>
            <button class="btn1" type="submit">Submit</button>
        </div>
        @if ($errors->any())
            <div class="alert alert-error">
                <p><b>Error</b></p>
                <p>{{ implode(' ', $errors->all()) }}</p>
        @endif
</div>
</form>

<div id="submit-notification">
    @if (session('success'))
        <div class="alert alert-success">
            <p>{{ session('success') }}</p>
        </div>
    @endif
</div>


</div>
