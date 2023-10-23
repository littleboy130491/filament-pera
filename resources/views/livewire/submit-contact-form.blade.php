<div class="form" id="form">
    <div class="checkbox">
        <label>
            <input type="checkbox" wire:model="purpose" value="Distributor">
            Distributor
        </label>
        <label>
            <input type="checkbox" wire:model="purpose" value="Agent">
            Agent
        </label>

    </div>
    <div class="input-form">
        <label for="name">First name:</label><br>
        <input type="text" wire:model="name" id="name" placeholder="Your Name" required><br>
        <label for="email">Email:</label><br>
        <input type="text" wire:model="email" id="email" placeholder="Email Address" required><br>
        <label for="phone">Phone Number:</label><br>
        <input type="text" wire:model="phone" id="phone" placeholder="Phone Number" required><br>
        <label for="textarea">Message</label><br>
        <textarea rows="4" cols="50" id="textarea" wire:model="message" placeholder="Message" required></textarea><br>
        <button class="btn1" type="submit" wire:click="save">Submit</button>
    </div>
</div>
