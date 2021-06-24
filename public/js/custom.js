jQuery(document).ready(function($){

    //calculate date start

    date_future = new Date('2022/10/1 12:00:00') ;
    date_now = new Date();

    seconds = Math.floor((date_future - (date_now))/1000);
    minutes = Math.floor(seconds/60);
    hours = Math.floor(minutes/60);
    days = Math.floor(hours/24);
    hours = hours-(days*24);
    minutes = minutes-(days*24*60)-(hours*60);
    seconds = seconds-(days*24*60*60)-(hours*60*60)-(minutes*60);

    //calculate date end




    "use strict";

    function CountdownTracker(label, value) {

        var el = document.createElement('span');

        el.className = 'flip-clock__piece';
        el.innerHTML = '<b class="flip-clock__card card"><b class="card__top"></b><b class="card__bottom"></b><b class="card__back"><b class="card__bottom"></b></b></b>' +
            '<span class="flip-clock__slot">' + label + '</span>';

        this.el = el;

        var top = el.querySelector('.card__top'),
            bottom = el.querySelector('.card__bottom'),
            back = el.querySelector('.card__back'),
            backBottom = el.querySelector('.card__back .card__bottom');

        this.update = function(val) {
            val = ('0' + val).slice(-2);
            if (val !== this.currentValue) {

                if (this.currentValue >= 0) {
                    back.setAttribute('data-value', this.currentValue);
                    bottom.setAttribute('data-value', this.currentValue);
                }
                this.currentValue = val;
                top.innerText = this.currentValue;
                backBottom.setAttribute('data-value', this.currentValue);

                this.el.classList.remove('flip');
                void this.el.offsetWidth;
                this.el.classList.add('flip');
            }
        }

        this.update(value);
    }

    function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        return {
            'Total': t,
            'Days': Math.floor(t / (1000 * 60 * 60 * 24)),
            'Hours': Math.floor((t / (1000 * 60 * 60)) % 24),
            'Minutes': Math.floor((t / 1000 / 60) % 60),
            'Seconds': Math.floor((t / 1000) % 60)
        };
    }

    function getTime() {
        var t = new Date();
        return {
            'Total': t,
            'Hours': t.getHours() % 12,
            'Minutes': t.getMinutes(),
            'Seconds': t.getSeconds()
        };
    }

    function Clock(countdown, callback) {

        countdown = countdown ? new Date(Date.parse(countdown)) : false;
        callback = callback || function() {};

        var updateFn = countdown ? getTimeRemaining : getTime;

        this.el = document.createElement('div');
        this.el.className = 'flip-clock';

        var trackers = {},
            t = updateFn(countdown),
            key, timeinterval;

        for (key in t) {
            if (key === 'Total') {
                continue;
            }
            trackers[key] = new CountdownTracker(key, t[key]);
            this.el.appendChild(trackers[key].el);
        }

        var i = 0;

        function updateClock() {
            timeinterval = requestAnimationFrame(updateClock);

            // throttle so it's not constantly updating the time.
            if (i++ % 10) {
                return;
            }

            var t = updateFn(countdown);
            if (t.Total < 0) {
                cancelAnimationFrame(timeinterval);
                for (key in trackers) {
                    trackers[key].update(0);
                }
                callback();
                return;
            }

            for (key in trackers) {
                trackers[key].update(t[key]);
            }
        }

        setTimeout(updateClock, 500);
    }

    
    var deadline = new Date(Date.parse(new Date()) + 468 * 24 * 60 * 60 * 1000);
    var c = new Clock(deadline, function() {
        alert('countdown complete')
    });
    const div = document.querySelector('.site-launch-date');
    div.appendChild(c.el);

});