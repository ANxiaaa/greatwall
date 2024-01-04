//transform滚动惯性视差（背景滚动视差）
;(function($, window, document,undefined) {
    "use strict";
    var Tfn = function() {};
    Tfn.prototype = {
            //初始化
            init  : function() {
                var self = this;
                this.scrolly();
    
            },
            scrolly:function () {
    
                var defaults = {
                    wrapper: '#scrolly',
                    parent_move : true,//容器跟随惯性滚动
                    targets : '.scrolly-el',
                    bgParallax : false,//背景惯性滚动
                    wrapperSpeed: 0.08,
                    targetSpeed: 0.02,
                    targetPercentage: 0.1,
                    callback:function () {}
                };
                var requestAnimationFrame =
                    window.requestAnimationFrame || window.mozRequestAnimationFrame ||
                    window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
                window.requestAnimationFrame = requestAnimationFrame;
                var cancelAnimationFrame = window.cancelAnimationFrame || window.mozCancelAnimationFrame;
                var extend = function () {
                    // Variables
                    var extended = {};
                    var deep = false;
                    var i = 0;
                    var length = arguments.length;
                    // Merge the object into the extended object
                    var merge = function (obj) {
                        for (var prop in obj) {
                            if (obj.hasOwnProperty(prop)) {
                                extended[prop] = obj[prop];
                            }
                        }
                    };
                    // Loop through each object and conduct a merge
                    for ( ; i < length; i++ ) {
                        var obj = arguments[i];
                        merge(obj);
                    }
                    return extended;
                };
                var scrolly = function(){
                    this.Targets = [];
                    this.TargetsLength = 0;
                    this.wrapper = '';
                    this.windowHeight = 0;
                    this.wapperOffset = 0;
                    this.myTop = null;
                };
                scrolly.prototype = {
                    isAnimate: false,
                    isResize : false,
                    scrollId: "",
                    resizeId: "",
                    init : function(options){
                        this.settings = extend(defaults, options || {});
                        this.wrapper = document.querySelector(this.settings.wrapper);
    
                        if(this.wrapper==="undefined"){
                            return false;
                        }
                        this.targets = document.querySelectorAll(this.settings.targets);
                        if(this.settings.parent_move){
                            document.body.style.height = this.wrapper.clientHeight + 'px';
                        }
    
                        this.windowHeight = window.clientHeight;
                        this.attachEvent();
                        this.apply(this.targets,this.wrapper);
                        this.animate();
                        this.resize();
    
    
                    },
                    apply : function(targets,wrapper){
                        if(this.settings.parent_move){
                            this.wrapperInit();
                        }
                        this.targetsLength = targets.length;
                        for (var i = 0; i < this.targetsLength; i++) {
                            
                            var attr = {
                                offset : targets[i].getAttribute('data-offset'),
                                speedX : targets[i].getAttribute('data-speed-x'),
                                speedY : targets[i].getAttribute('data-speed-Y'),
                                percentage : targets[i].getAttribute('data-percentage'),
                                horizontal : targets[i].getAttribute('data-v')
                            };
                            this.targetsInit(targets[i],attr);
                        }
    
                    },
                    wrapperInit: function(){
                        this.wrapper.style.width = '100%';
                        // this.wrapper.style.position = 'fixed';
                    },
                    targetsInit: function(elm,attr){
    
                        this.Targets.push({
                            elm : elm,
                            offset : attr.offset ? attr.offset : 0,
                            offsetTop : $(elm).offset().top,
                            hei : $(elm).height(),
                            horizontal : attr.horizontal ? attr.horizontal : 0,
                            top : 0,
                            left : 0,
                            speedX : attr.speedX ? attr.speedX : 1,
                            speedY : attr.speedY ? attr.speedY : 1,
                            percentage :attr.percentage ? attr.percentage : 0
                        });
                    },
                    scroll : function(){
                        var scrollTopTmp = document.documentElement.scrollTop || document.body.scrollTop;
                        this.scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
                        var offsetBottom = this.scrollTop + this.windowHeight;
                        if(this.settings.parent_move){
                            this.wrapperUpdate(this.scrollTop);
                        }
                        for (var i = 0; i < this.Targets.length; i++) {
                            this.targetsUpdate(this.Targets[i]);
                        }
    
                    },
                    animate : function(){
                        this.scroll();
                        this.scrollId = requestAnimationFrame(this.animate.bind(this));
                    },
                    wrapperUpdate : function(){
                        this.wapperOffset += (this.scrollTop - this.wapperOffset) * this.settings.wrapperSpeed;
                        this.wrapper.style.transform = 'translate3d(' + 0 + ',' +  Math.round(-this.wapperOffset* 100) / 100 + 'px ,' + 0 + ')';
                        this.myTop = Math.round(-this.wapperOffset* 100) / 100;
                        this.settings.callback(this.myTop);
                    },
                    targetsUpdate : function(target){
                        var wH = $(window).height();
                        target.offsetTop = $(target.elm).offset().top;
                        target.top += ((this.scrollTop - target.offsetTop + (wH-target.hei)/2) * Number(this.settings.targetSpeed) * Number(target.speedY) - target.top) * this.settings.targetPercentage;
                        target.left += ((this.scrollTop - target.offsetTop + (wH-target.hei)/2) * Number(this.settings.targetSpeed) * Number(target.speedX) - target.left) * this.settings.targetPercentage;
                        var targetOffsetTop = ( parseInt(target.percentage) - target.top - parseInt(target.offset) );
                        var offsetY = Math.round(targetOffsetTop * -100) / 100;
                        var offsetX = 0;
                        if(target.horizontal){
                            var targetOffsetLeft = ( parseInt(target.percentage) - target.left - parseInt(target.offset) );
                            offsetX = Math.round(targetOffsetLeft * -100) / 100;
                        }
                        if(this.settings.bgParallax){
                            if(target.horizontal){
                                $(target.elm).css({backgroundPosition:  offsetX +'px 50%'});
                            }else{
                                $(target.elm).css({backgroundPosition: '50% ' + offsetY + 'px'});
                            }
                        }else{
                            target.elm.style.transform = 'translate3d(' + offsetX + 'px ,' + offsetY + 'px ,' + 0 +')';
                        }
                    },
                    resize: function(){
                        var self = this;
                        self.windowHeight = (window.innerHeight || document.documentElement.clientHeight || 0);
                        if( parseInt(self.wrapper.clientHeight) != parseInt(document.body.style.height)){
                            if(self.settings.parent_move){
                                document.body.style.height = self.wrapper.clientHeight + 'px';
                            }
                        }
                        self.resizeId = requestAnimationFrame(self.resize.bind(self));
                    },
                    attachEvent : function(){
                        var self = this;
                        window.addEventListener('resize',(function(){
                            if(!self.isResize){
                                cancelAnimationFrame(self.resizeId);
                                cancelAnimationFrame(self.scrollId);
                                self.isResize = true;
                                setTimeout((function(){
                                    self.isResize = false;
                                    self.resizeId = requestAnimationFrame(self.resize.bind(self));
                                    self.scrollId = requestAnimationFrame(self.animate.bind(self));
                                }),200);
                            }
                        }));
    
                    }
                };
                window.scrolly = new scrolly();
                return scrolly;
            }
        };
        window.base = new Tfn();
    })(jQuery, window, document);
    base.init();   
    
    $(function(){
       
    
        
    
        var _item, arr;
        function getTop(e) {
          for (var t; void 0 === e.offsetTop; ) e = e.parentNode;
          for (t = e.offsetTop; (e = e.offsetParent); ) t += e.offsetTop;
          return t;
        }
        function yGo(e, t, r, o) {
          var a,
            n = r.style,
            i = e - (t - window.innerHeight * o);
          0 < i &&
            ((a = 1 < (a = i / (2 * data._vh)) ? 1 : a), n.setProperty("--go", a));
        }
        // if简洁写法
        700 < window.innerWidth &&
          ((_item = document.querySelectorAll(".yAni")),
          (arr = []),
          [].slice.call(_item).forEach(function (e) {
            e.style.setProperty("--go", 0), arr.push(getTop(e));
          }),
          scrolly.init({
            wrapper: "#roll",
            targets: ".scr-el",
            parent_move: !0,
            wrapperSpeed: .1,
            callback: function (e) {
              var r = -e;
              [].slice.call(_item).forEach(function (e, t) {
                yGo(r, arr[t], e, parseInt(e.getAttribute("data-offset")));
              });
            }
          })
          );
    })
    
    var alan = (function(document, undefined) {
        var readyRE = /complete|loaded|interactive/;
        var idSelectorRE = /^#([\w-]+)$/;
        var classSelectorRE = /^\.([\w-]+)$/;
        var tagSelectorRE = /^[\w-]+$/;
        var translateRE = /translate(?:3d)?\((.+?)\)/;
        var translateMatrixRE = /matrix(3d)?\((.+?)\)/;
    
        var $ = function(selector, context) {
            context = context || document;
            if (!selector)
                return wrap();
            if (typeof selector === 'object')
                if ($.isArrayLike(selector)) {
                    return wrap($.slice.call(selector), null);
                } else {
                    return wrap([selector], null);
                }
            if (typeof selector === 'function')
                return $.ready(selector);
            if (typeof selector === 'string') {
                try {
                    selector = selector.trim();
                    if (idSelectorRE.test(selector)) {
                        var found = document.getElementById(RegExp.$1);
                        return wrap(found ? [found] : []);
                    }
                    return wrap($.qsa(selector, context), selector);
                } catch (e) {}
            }
            return wrap();
        };
    
        var wrap = function(dom, selector) {
            dom = dom || [];
            Object.setPrototypeOf(dom, $.fn);
            dom.selector = selector || '';
            return dom;
        };
    
        /**
         * querySelectorAll
         * @param {type} selector
         * @param {type} context
         * @returns {Array}
         */
        $.qsa = function(selector, context) {
            context = context || document;
            return $.slice.call(classSelectorRE.test(selector) ? context.getElementsByClassName(RegExp.$1) : tagSelectorRE.test(selector) ? context.getElementsByTagName(selector) : context.querySelectorAll(selector));
        };
    
    
        $.uuid = 0;
    
        $.data = {};
    
        $.insertAfter = function(elem,tarElem){
            var parent = tarElem.parentNode;
            if (parent.lastChlid == tarElem) {
                parent.appendChild(elem);
            }else{
                parent.insertBefore(elem,tarElem.nextSibling);
            }
        };
    
        // 查找兄弟元素
        $.getSiblings = function(o){
            var a = [];
            var p = o.previousSibling;
            while(p){
                if(p.nodeType === 1){
                    a.push(p);
                }
                p = p.previousSibling;
            }
            a.reverse();
    
            var n = o.nextSibling;
            while(n){
                if(n.nodeType === 1){
                    a.push(n);
                }
                n = n.nextSibling;
            }
            return a;
        };
    
        $.toggleClass = function( elem, c ) {
            if(elem.classList.contains(c)){
                elem.classList.remove(c);
            }else{
                elem.classList.add(c);
            }
        };
    
        /* 移动端点击事件模拟PC端hover事件
        * class1,选择匹配的元素
        * class2,匹配元素里的a元素，阻止它跳转
        * */
        $.touchToHover = function (class1,class2) {
    
            [].slice.call(document.querySelectorAll(class1)).forEach( function( el) {
                el.querySelector(class2).addEventListener( 'touchstart', function(e) {
                    console.log(this);
                    //e.stopPropagation();
                    e.preventDefault();
                }, false );
                el.addEventListener( 'touchstart', function(e) {
                    $.toggleClass( this, 'cs-hover' );
                }, false );
            });
        };
    
        $.getStyle = function(elem,attr){
            return elem.currentStyle ? elem.currentStyle[attr] : window.getComputedStyle(elem,false)[attr];
        };
    
        $.getElemPosition = function(elem){
            var oPositon = elem.getBoundingClientRect();
            return {
                top:oPositon.top,
                bottom:oPositon.bottom,
                left:oPositon.left,
                right:oPositon.right,
            };
        };
    
        $.Event = {
            on:function(elem,type,handler){
                if (elem.addEventListener) {
                    elem.addEventListener(type,handler,false);
                }else if(elem.attachEvent){
                    elem.attachEvent('on'+type,handler);
                }else{
                    elem['on'+type] = handler;
                }
            },
            off:function(elem,type,handler){
                if (elem.removeEventListener) {
                    elem.removeEventListener(type,handler,false);
                }else if (elem.detachEvent) {
                    elem.detachEvent('on'+type,handler);
                }else{
                    elem['on'+type] = null;
                }
            },
            getEvent:function(event){ //将它放在事件处理程序的开头，可以确保获取事件。
                return event ? event : window.event;
            },
            getTarget:function(event){ //目标元素
                return event.target || event.srcElement;
            },
            preventDefault:function(event){ //取消默认
                if (event.preventDefault) {
                    event.preventDefault();
                }else{
                    event.returnValue = false;
                }
            },
            stopPropagation:function(event){ //阻止冒泡
                if (event.stopPropagation) {
                    event.stopPropagation();
                }else{
                    event.cancelBubble = true;
                }
            },
            getRelatedTarget:function(event){//获得相关元素
                if (event.relatedTarget) {
                    return event.relatedTarget;
                }else if (event.toElement) {
                    return event.toElement;
                }else if (event.fromElement) {
                    return event.fromElement;
                }else{
                    return null;
                }
            },
            getButton:function(event){ //获取鼠标按钮
                if (alan.isSupported2) {
                    return event.button;
                }else{
                    switch(event.button){
                        case 0:
                        case 1:
                        case 3:
                        case 5:
                        case 7:
                            return 0;
                        case 2:
                        case 6:
                            return 2;
                        case 4:
                            return 1;
                    }
                }
            },
            getWheelDelta:function(event){ //滚轮的事件
                if (event.wheelDelta) {
                    return (client.engine.opera && client.engine.opera < 9.5 ? -event.wheelDelta : event.wheelDelta);
                }else{
                    return -event.detail * 40;
                }
            },
            getCharCode:function(event){
                if (typeof event.charCode == 'number') {
                    return event.charCode;
                }else{
                    return event.keyCode;
                }
            }
        };
    
        /**
         * 在连续整数中取得一个随机数
         * @param  {number}
         * @param  {number}
         * @param  {string} 'star' || 'end' || 'both'  随机数包括starNum || endNum || both
         * @return 一个随机数
         */
        $.mathRandom = function(starNum,endNum,type){
            var num = endNum - starNum;
            switch (type) {
                case 'star' : return parseInt(Math.random()*num + starNum,10);
                case 'end' : return Math.floor(Math.random()*num + starNum) + 1;
                case 'both' : return Math.round(Math.random()*num + starNum);
                default : console.log('没有指定随机数的范围');
            }
        };
    
        // 获得数组中最小值
        $.getArrayMin = function(array) {
            /*var min = array[0];
             array.forEach(function (item) {
             if(item < min){
             min = item;
             }
             });
             return min;*/
    
            return Math.min.apply(Math,array);
        };
    
        // 获得数组中最大值
        $.getArrayMax = function (array) {
            return Math.max.apply(Math,array);
        };
    
        // 数组去重复
        $.getArrayNoRepeat = function (array) {
            var noRepeat = [];
            var data = {};
            array.forEach(function (item) {
                if(!data[item]){
                    noRepeat.push(item);
                    data[item] = true;
                }
            });
            return noRepeat;
        };
    
        $.isArray = function(val){
            return Array.isArray(val) || Object.prototype.toString.call(val) === '[object Array]';
        };
        $.isFunction = function(val){
            return Object.prototype.toString.call(val) == '[object Function]';
        };
        $.isRegExp = function(val){
            return Object.prototype.toString.call(val) == '[object RegExp]';
        };
    
        $.isMacWebkit = (navigator.userAgent.indexOf("Safari") !== -1 && navigator.userAgent.indexOf("Version") !== -1);
        $.isFirefox = (navigator.userAgent.indexOf("Firefox") !== -1);
    
        //
        $.fn = {
            each: function(callback) {
                [].every.call(this, function(el, idx) {
                    return callback.call(el, idx, el) !== false;
                });
                return this;
            }
        };
    
        //兼容 AMD 模块
        if (typeof define === 'function' && define.amd) {
            define('alan', [], function() {
                return $;
            });
        }
        return $;
    })(document);
    
    // 滚动动画
    (function ($) {
        /*
        * 需要在css文件里添加 .scroll-animate.animated {visibility: hidden;} 样式，解决"闪一下"的bug
        * .disable-hover {pointer-events: none;} 也需要加在样式表中
        * 如果滚动事件失效，查看body元素是否设置了 {height:100%}，它会影响滚动事件。
        * */
        this.shell = [];
        var ScrollAnimate = function (opt) {
            this.opt = opt || {};
            this.className = this.opt.className || '.scroll-animate'; // 获取集合的class
            this.animateClass = this.opt.animateClass || 'animated';  // 动画依赖的class
            this.elem = document.querySelectorAll(this.className);    // 需要滚动展示的元素
            this.position = [];                                       // 所有元素的offsetTop距离数组
            this.windowHeight = ('innerHeight' in window) ? window.innerHeight : document.documentElement.clientHeight;
            this.time = null;
            this.body = document.body;
            this.init();
        };
        ScrollAnimate.prototype = {
            getPosition:function () {
                var self = this;
                self.position.length = 0;  // 重置数组
                [].slice.call(self.elem).forEach(function (elem) {
                    if(elem.classList.contains('father')){
                        var children = elem.querySelectorAll(elem.getAttribute('data-child'));
                        var delay = parseFloat(elem.getAttribute('data-delay'));
                        [].slice.call(children).forEach(function (obj,index) {
                            obj.classList.add('animated');
                            obj.style.visibility = 'hidden';
    
                            if(obj.getAttribute('data-delay')){
                                obj.style.animationDelay = obj.getAttribute('data-delay') + 's';
                            }else{
                                obj.style.animationDelay = delay * index + 's';
                            }
                        })
                    }else if(elem.classList.contains('font-fadeIn')){
                        elem.style.visibility = 'hidden';
                    }else{
                        elem.classList.add('animated');
                    }
    
                    self.position.push(self.getOffsetTop(elem));
                });
            },
            getOffsetTop:function(element){
                var top;
                while (element.offsetTop === void 0) {
                    element = element.parentNode;
                }
                top = element.offsetTop;
                while (element = element.offsetParent) {
                    top += element.offsetTop;
                }
                return top;
            },
            scrollEvent:function () {
                var self = this;
    
                self.body.classList.add('disable-hover');
                clearTimeout(self.time);
                self.time = setTimeout(function () {
                    self.body.classList.remove('disable-hover');
                },100);
    
                var scrollTop = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;
    
                self.position.forEach(function (item,index) {
                    var currentElem = self.elem[index];
                    var effect = currentElem.getAttribute('data-effect') || 'fadeInUp';
                    var Tclass = currentElem.getAttribute('data-Tclass') || 'go';
                    var flag = (scrollTop + self.windowHeight >item) ? true : false;
    
                    // 判断当前元素是否有father，得知将动画应用到当前元素还是当前元素到子元素。
                    if(currentElem.classList.contains('father')){
                        var children = currentElem.querySelectorAll(currentElem.getAttribute('data-child'));
    
                        if(flag){
                            [].slice.call(children).forEach(function (item) {
    
                                if(item.style.visibility == 'hidden'){
                                    item.style.visibility = 'visible';
    
                                    // 判断是否为滚动数字效果的元素
                                    // 数字滚动的效果，默认都放在father的容器里，因为这个效果一般都是多个同时出现。
                                    if(item.classList.contains('count-up')){
                                        //self.countUp(item,true);
                                    }else{
                                        if(item.getAttribute('data-effect')){
                                            item.classList.add(item.getAttribute('data-effect'));
                                        }else{
                                            item.classList.add(effect);
                                        }
                                    }
    
                                }
                            })
                        }else{
                            [].slice.call(children).forEach(function (item) {
                                if(item.style.visibility == 'visible'){
                                    /*if(item.classList.contains('count-up')){
                                        self.countUp(item,false);      // 传入false，告诉函数清空计时器。
                                    }*/
    
    
                                    if(item.getAttribute('data-effect')){
                                        item.classList.remove(item.getAttribute('data-effect'));
                                    }else{
                                        item.classList.remove(effect);
                                    }
                                    item.style.visibility = 'hidden';
                                }
                            });
                        }
                    }else if(currentElem.classList.contains('font-fadeIn')){  // 文字淡入到效果
                        if(flag && currentElem.style.visibility == 'hidden'){
                            self.fontEffect(currentElem);
                        }else if(!flag && currentElem.style.visibility == 'visible'){
                            currentElem.style.visibility = 'hidden'
                        }
                    }else if(currentElem.classList.contains('classGo')){  //滚动到位置添加动画类
                        if(flag){
                            currentElem.style.visibility = 'visible';
                            currentElem.classList.add(Tclass);
                        }else{
                            if(currentElem.style.visibility == 'visible'){
                                currentElem.classList.remove(Tclass);
                                currentElem.style.visibility = 'hidden';
                            }
                        }
                    }else{
                        if(flag){
                            currentElem.style.visibility = 'visible';
                            currentElem.classList.add(effect);
                            currentElem.style.animationDelay = currentElem.getAttribute('data-delay') + 's';
    
                        }else{
                            if(currentElem.style.visibility == 'visible'){
                                currentElem.classList.remove(effect);
                                currentElem.style.visibility = 'hidden';
                            }
                        }
                    }
                })
            },
            countUp:function (elem,isTrue) {
                // 效果不理想，放弃了。
    
                if(isTrue){
                    elem.innerHtml = '';
    
                    var time = elem.getAttribute('data-time');
                    var sum = elem.getAttribute('data-text');
                    var speed = Math.ceil(time / 100);
                    var increment = Math.round(sum / speed);
                    var number = 1;
                    elem.timer = setInterval(function () {
                        if(number < sum){
                            number += increment;
                            elem.innerText = number;
                        }else{
                            elem.innerText = sum;
                            clearInterval(elem.timer);
                        }
                    },100);
    
                    console.log(speed);
                }else{
                    console.log('清空定时器');
                    clearInterval(elem.timer);
    
                }
    
            },
            fontEffect:function (elem) {
                var self = this;
                var array = elem.getAttribute('data-text').split('');
    
                var delay = elem.getAttribute('data-delay');
                var effect = elem.getAttribute('data-effect') || 'fadeIn';
                elem.innerHTML = '';
                var Fragment = document.createDocumentFragment();
                array.forEach(function (item,i) {
                    var span = document.createElement("font");
                    span.className='animated';
                    span.classList.add(effect);
                    if(delay){
                        span.style.animationDelay = delay * i + 's';
                    }else{
                        span.style.animationDelay = 0.1 * i + 's';
                    }
                    if(item==='/'){
                        span=document.createElement("br");
                    }
    
    
                    span.innerText = item;
                    Fragment.appendChild(span);
                });
                elem.style.visibility = 'visible';
                elem.appendChild(Fragment);
            },
            init:function () {
                var self = this;
    
                if(self.elem.length < 1){
                    console.log('滚动动画对象集合为零');
                    return;
                }
    
                self.scrollEvent = self.scrollEvent.bind(this);
    
                setTimeout(function () {
                    self.getPosition(); // 获取每个元素的位置，存放在一个数组。
                    self.scrollEvent();
    
                    var _scrollEvent = throttlePro(self.scrollEvent,100,300);
    
    
                    document.addEventListener('scroll',_scrollEvent,false);
    
                    // 改变窗口大小，重新初始化一些数据
                    window.onresize = function () {
                        //console.log('resize the window');
                        throttle(function () {
                            self.windowHeight = ('innerHeight' in window) ? window.innerHeight : document.documentElement.clientHeight;
                            self.getPosition();
                            self.scrollEvent();
                        })
                    };
                },0);
    
            }
        };
        
        $.scrollAnimate = ScrollAnimate;
    })(alan);
    
    // 函数截流
    function throttle(method,context){
        clearTimeout(method.tId);
        method.tId = setTimeout(function(){
            method.call(context);
        },500);
    }
    function throttlePro(fn, delay, mustRunDelay){
        var timer = null;
        var t_start;
        return function(){
            var context = this, args = arguments, t_curr = +new Date();
            clearTimeout(timer);
            if(!t_start){
                t_start = t_curr;
            }
            if(t_curr - t_start >= mustRunDelay){
                fn.apply(context, args);
                t_start = t_curr;
            }
            else {
                timer = setTimeout(function(){
                    fn.apply(context, args);
                }, delay);
            }
        };
    }
    
    $(document).ready(function(){
        // 动画初始化
        new alan.scrollAnimate();
    
        $(window).scroll(function() {
            var target_top = $(window).scrollTop();
            if (target_top > 35) {
                $(".header4").addClass("on");
            }else{
                $(".header4").removeClass("on");
            }
        });
        var target_top = $(window).scrollTop();
            if (target_top > 35) {
                $(".header4").addClass("on");
            }else{
                $(".header4").removeClass("on");
            }
    });
    
    function ajaxlist(urls,data,fun){
        $.ajax({
            url: urls,
            type: 'POST',
            data: data,
            dataType: 'html',
            beforeSend: function(data){
            },
            success: fun,
            complete:function(data){}
        })
    }

    function videoClick(el){
        var vidcontainer=$(".vidcontainer"),
            video=$(".vidcontainer video"),
            videoWrap = $('.vidcontainer iframe');
        el.delegate(".li","click",function(ev){
            ev.stopPropagation
            ev.preventDefault
            var _this=$(this);
            var vid=_this.data("src");
            var link = _this.data('link');
            // ev.preventDefault();
            if(link){
                videoWrap.attr('src',link);
                vidcontainer.fadeIn();
                videoWrap.stop().show();
                video.stop().hide();
                return;
            }else if(vid){
                video.attr("src",vid);
                vidcontainer.fadeIn();
                video.get(0).play();
                videoWrap.stop().hide();
                video.stop().show();
            }
            
            
        })
        $(".vidcontainer .closevid,.vidcontainer .mask").on("click",function(ev){
            ev.stopPropagation();
            if(!$(ev.target).hasClass("video")){
                video.get(0).pause();
                vidcontainer.fadeOut(function(){
                    video.attr("src","");
                    videoWrap.attr('src','');
                    videoWrap.stop().show();
                    video.stop().show();
                })
            }
        })
    }

    function scrollAnimation(ele) {
        $(ele).each(function() {
            var _this = $(this);
            if (_this.offset().top + 500 > $(window).scrollTop() + $(window).height() || _this.offset().top < $(window).scrollTop() - _this.outerHeight()) {
            } else if ($(window).scrollTop()  >=  _this.offset().top - $(window).height() * 0.92) {
                _this.addClass('animate');
            }
        });
        $(window).scroll(function(){
            $(ele).each(function() {
                var _this = $(this);
                if (_this.offset().top > $(window).scrollTop() + $(window).height() || _this.offset().top < $(window).scrollTop() - _this.outerHeight()) {
                } else if ($(window).scrollTop() >= _this.offset().top - $(window).height() * 0.92) {
                    _this.addClass('animate');
                }
            });
        });
    }

    function videoClick(el){
        var vidcontainer=$(".vidcontainer"),
            video=$(".vidcontainer video"),
            videoWrap = $('.vidcontainer iframe');
        el.delegate(".play-btn","click",function(ev){
           
            var _this=$(this);
            var vid=_this.data("src");
            var link = _this.data('link');
            ev.preventDefault();
            if(link){
                videoWrap.attr('src',link);
                vidcontainer.fadeIn();
                videoWrap.stop().show();
                video.stop().hide();
                return;
            }else if(vid){
                video.attr("src",vid);
                vidcontainer.fadeIn();
                video.get(0).play();
                videoWrap.stop().hide();
                video.stop().show();
            }
            
            
        })
        $(".vidcontainer .closevid,.vidcontainer .mask").on("click",function(ev){
            ev.stopPropagation();
            if(!$(ev.target).hasClass("video")){
                video.get(0).pause();
                vidcontainer.fadeOut(function(){
                    video.attr("src","");
                    videoWrap.attr('src','');
                    videoWrap.stop().show();
                    video.stop().show();
                })
            }
        })
    }