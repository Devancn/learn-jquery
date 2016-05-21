//插件方法:setTableColor()
$.fn.setTableColor=function(c1,c2){
    //this代表jquery对象
    //首行颜色
    this.find('tr:first').css('backgroundColor',c1);
    //其余行颜色
    this.find('tr:gt(0):odd').css('backgroundColor',c2);
};