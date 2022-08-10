const deadline = new Date(document.querySelector('[data-countdown]').dataset.countdown * 1000);

function getTimeRemaining(endtime, unitsToDisplay) {
    const total = Date.parse(endtime) - Date.parse(new Date());
    var seconds = Math.floor((total / 1000) % 60);
    var minutes = Math.floor((total / 1000 / 60) % 60);
    var hours = Math.floor((total / (1000 * 60 * 60)) % 24);
    var days = Math.floor(total / (1000 * 60 * 60 * 24));

    if(unitsToDisplay[0] !== 'days') {
        if(unitsToDisplay[0] === 'hours') {
            hours = Math.floor((total / (1000 * 60 * 60)));
        }
        else if(unitsToDisplay[0] === 'minutes') {
            seconds = Math.floor((total / 1000) % 60);
            minutes = Math.floor((total / 1000 / 60));
        }
        else if(unitsToDisplay[0] === 'seconds') {
            seconds = Math.floor((total / 1000));
        }
    }

    return {
        total,
        days,
        hours,
        minutes,
        seconds
    };
}

function initializeClock(id, endtime) {
    const unitsToDisplay = [];
    const countdown = document.getElementById(id);
    const daysSpan = countdown.querySelector('.days');
    const hoursSpan = countdown.querySelector('.hours');
    const minutesSpan = countdown.querySelector('.minutes');
    const secondsSpan = countdown.querySelector('.seconds');

    if(daysSpan) {
       unitsToDisplay.push('days');
    }
    if(hoursSpan) {
        unitsToDisplay.push('hours');
    }
    if(minutesSpan) {
        unitsToDisplay.push('minutes');
    }
    if(secondsSpan) {
        unitsToDisplay.push('seconds');
    }

    function updateClock() {
        const t = getTimeRemaining(endtime, unitsToDisplay);

        if(daysSpan) {
            daysSpan.innerHTML = ('0' + t.days).slice(-2);
        }
        if(hoursSpan) {
            if(t.hours < 100) {
                hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            } else {
                hoursSpan.innerHTML = t.hours.toString();
            }
        }
        if(minutesSpan) {
            if(t.minutes < 100) {
                minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            } else {
                minutesSpan.innerHTML = t.minutes.toString();
            }
        }
        if(secondsSpan) {
            if(t.seconds < 100) {
                secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
            } else {
                secondsSpan.innerHTML = t.seconds.toString();
            }
        }

        if (t.total <= 0) {
            clearInterval(timeinterval);
        }
    }
    updateClock();
    const timeinterval = setInterval(updateClock, 1000);
}
initializeClock('countdown', deadline);
