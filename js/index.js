//set default degree (360*5)
var degree = 1800;
//number of clicks = 0
var clicks = 0;

	/*WHEEL SPIN FUNCTION*/
	$('#spin').click(function(){
		
		//add 1 every click
		clicks ++;
		
		/*multiply the degree by number of clicks
	  generate random number between 1 - 360, 
    then add to the new degree*/
		var newDegree = degree*clicks;
		var extraDegree = Math.floor(Math.random() * (360 - 1 + 1)) + 1;
		totalDegree = newDegree+extraDegree;
		
		/*let's make the spin btn to tilt every
		time the edge of the section hits 
		the indicator*/
		$('#wheel .sec').each(function(){
			var t = $(this);
			var noY = 0;
			
			var c = 0;
			var n = 700;	
			var interval = setInterval(function () {
				c++;				
				if (c === n) { 
					clearInterval(interval);				
				}	
					
				var aoY = t.offset().top;
				$("#txt").html(aoY);
				console.log(aoY);
				
				/*23.7 is the minumum offset number that 
				each section can get, in a 30 angle degree.
				So, if the offset reaches 23.7, then we know
				that it has a 30 degree angle and therefore, 
				exactly aligned with the spin btn*/
				if(aoY < 23.89){
					console.log('<<<<<<<<');
					$('#spin').addClass('spin');
					setTimeout(function () { 
						$('#spin').removeClass('spin');
					}, 100);	
				}
			}, 10);
			
			$('#inner-wheel').css({
				'transform' : 'rotate(' + totalDegree + 'deg)'			
			});
		 
			noY = t.offset().top;
			
		});
	});
	
	
	


'use strict';

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (!self) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return call && (typeof call === "object" || typeof call === "function") ? call : self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function, not " + typeof superClass); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, enumerable: false, writable: true, configurable: true } }); if (superClass) Object.setPrototypeOf ? Object.setPrototypeOf(subClass, superClass) : subClass.__proto__ = superClass; }

var ReactCSSTransitionGroup = React.addons.CSSTransitionGroup;

var Carousel = function (_React$Component) {
    _inherits(Carousel, _React$Component);

    function Carousel(props) {
        _classCallCheck(this, Carousel);

        var _this = _possibleConstructorReturn(this, _React$Component.call(this, props));

        _this.state = {
            items: _this.props.items,
            active: _this.props.active,
            subMenu: _this.props.subMenu,
			itemsLink: _this.props.itemsLink,
            direction: ''
        };
        _this.rightClick = _this.moveRight.bind(_this);
        _this.leftClick = _this.moveLeft.bind(_this);
        return _this;
    }

    Carousel.prototype.generateItems = function generateItems() {
        var items = [];
        var level;
        console.log(this.state.active);
        for (var i = this.state.active - 2; i < this.state.active + 3; i++) {
            var index = i;
            if (i < 0) {
                index = this.state.items.length + i;
            } else if (i >= this.state.items.length) {
                index = i % this.state.items.length;
            }
            level = this.state.active - i;
            items.push(React.createElement(Item, { key: index, id: this.state.items[index], level: level, idSubMenu: this.state.subMenu[i],idItemsLink: itemsLink[index]}));
        }
        return items;
    };

    Carousel.prototype.moveLeft = function moveLeft() {
        var newActive = this.state.active;
        newActive--;
        this.setState({
            active: newActive < 0 ? this.state.items.length - 1 : newActive,
            direction: 'left'
        });
    };

    Carousel.prototype.moveRight = function moveRight() {
        var newActive = this.state.active;
        this.setState({
            active: (newActive + 1) % this.state.items.length,
            direction: 'right'
        });
    };

    Carousel.prototype.render = function render() {
        return React.createElement(
            'div',
            { id: 'carousel', className: 'noselect' },
            React.createElement(
                'div',
                { className: 'arrow arrow-left', onClick: this.leftClick },
                React.createElement('i', { className: 'fi-arrow-left' })
            ),
            React.createElement(
                ReactCSSTransitionGroup,
                {
                    transitionName: this.state.direction },
                this.generateItems()
            ),
            React.createElement(
                'div',
                { className: 'arrow arrow-right', onClick: this.rightClick },
                React.createElement('i', { className: 'fi-arrow-right' })
            )
        );
    };

    return Carousel;
}(React.Component);

var Item = function (_React$Component2) {
    _inherits(Item, _React$Component2);

    function Item(props) {
        _classCallCheck(this, Item);

        var _this2 = _possibleConstructorReturn(this, _React$Component2.call(this, props));

        _this2.state = {
            level: _this2.props.level
        };
        return _this2;
    }

    Item.prototype.render = function render() {
        var className = 'item level' + this.props.level;
        return React.createElement(
            'div',
            { className: className },
             this.generateItemsLink(), React.createElement('div',{className: 'links-holder-div'},this.generateSubMenu())
        );
    }; 
	Item.prototype.generateSubMenu = function generateSubMenu(){
        var subMenuItems = [];
        if (this.props.idSubMenu != null) {
            for (var i = 0; i < this.props.idSubMenu.length; i++) {
                subMenuItems.push(React.createElement('a',{className: "a-sub-menu", href: this.removeDiacritics(this.props.idSubMenu[i])+'.php'},this.props.idSubMenu[i]));
            }
        }
        return subMenuItems;
    }
	
	Item.prototype.generateItemsLink = function generateItemsLink(){
		
		console.log("S:"+this.props.idItemsLink);
        if(this.props.idItemsLink == ""){
			return this.props.id;
		}else{ 
		return React.createElement('a', {href: this.props.idItemsLink }, this.props.id);
		}
    }
	Item.prototype.removeDiacritics = function removeDiacritics(string) {
		
        var r = string;
		if(r != null && r != ''){
		console.log("S"+this.props.idItemsLink);
        r = r.replace(/ă/, "a");
        r = r.replace(/â/, "a");
        r = r.replace(/î/, "i");
        r = r.replace(/ț/, "t");
        r = r.replace(/ș/, "s");
		
		}
        return r;
    }
    return Item;
}(React.Component);

var items = ["Unitate", "Diversitate", "Integrare", "Aplicații","Evaluare" , "Dicționar","Informații"];

var uItems = [["Culturală","Modele Politice"],["Lingvistică","Etno-Culturală","Religioasă","Politică","Conflicte"],["Etape","Inițiatori","Instituții","State membre","Simboluri","Cetățean european"],["Unitate","Diversitate","Integrare"],[],[],[]];
var itemsLink = ["", "", "", "" , "Evaluare.php","Dictionar.php","Informatii.php"];
ReactDOM.render(React.createElement(Carousel, { items: items, active: 0, subMenu: uItems, itemsLink: itemsLink }), document.getElementById('app'));