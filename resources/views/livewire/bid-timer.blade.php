<div>
    <h4 class=" tracking-wide mb-3 text-2xl"><span class="font-semibold text-2xl text-red-600">Closing in:</span> <span wire:model='timer' id="timer"></span> </h4>

    <input type="hidden" wire:model='minutes' name="hiddenMinutes" id="hiddenMinutes" value="{{$minutes}}">
    <input type="hidden" wire:model='seconds' name="hiddenSeconds" id="hiddenSeconds" value="{{$seconds}}">
</div>

<script>
    function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    var timerinterval = setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        hiddenMinutes.setAttribute('value',  minutes);
        hiddenSeconds.setAttribute('value',  seconds);

        if (--timer < 0) {
            duration = 0;
            timer=0;
            clearInterval(timerinterval);
            // timer = duration; //restarts timer
            Livewire.emit('timeUp');

            console.log('timer up');
        }
    }, 1000);
}

window.onload = function () {
        var fiveMinutes = 60 * 1,
        display = document.querySelector('#timer');
        hiddenMinutes = document.querySelector('#hiddenMinutes');
        hiddenSeconds = document.querySelector('#hiddenSeconds');
        startTimer(fiveMinutes, display);
};
</script>