if (document.querySelector('.slider')) {
    new Vue({
        el: '.slider',
        data: function () {
            return {
                item: 1,
                counter: document.querySelectorAll('.slider__banner').length,
                interval: 3000
            }
        },
        methods: {
            previous: function() {
                const pos = (this.item - 1 < 1) ? this.counter : this.item - 1;
                
                this.changeItem(pos)
            },
            next: function () {
                const pos = (this.item + 1 > this.counter) ? 1 : this.item + 1;
                console.log('test')
                this.changeItem(pos)
            },
            select: function (pos) {
                this.changeItem(pos)
            },
            hideCurrentElement: function () {
                document.querySelectorAll(`li[slider-item='${this.item}']`).forEach(function (item) {
                    item.classList.remove('item--current')
                })
            },
            showCurrentElement: function () {
                document.querySelectorAll(`li[slider-item='${this.item}']`).forEach(function (item) {
                    item.classList.add('item--current')
                })
            },
            changeItem: function (pos) {
                this.hideCurrentElement()
                this.item = pos
                this.showCurrentElement()
            }
        },
        mounted: function () {
            setInterval(function () {
                this.next()
            }.bind(this), this.interval)
        }
    });
}

if (document.querySelector('.contact__comments-form')) {
    new Vue({
        el: '.contact__comments-form',
        data: function () {
            return {
                comment: ''
            }
        },
        computed: {
            remaining () {
                return 255 - this.comment.length
            }
        },
        mounted: function () {
        }
    });
}