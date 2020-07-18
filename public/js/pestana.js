var linksParent = $('.tabs__links');
var links = linksParent.find('a');
var items = $('.tabs__contents__item');
links.eq(0).add(items.eq(0)).addClass('active');
items.addClass('inactive');
linksParent.on('click', 'a', function() {
    var t = $(this);
    var i = t.index();
    t.add(items.eq(i)).addClass('active').siblings().removeClass('active');
});