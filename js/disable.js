var myMenu:ContextMenu = new ContextMenu();
myMenu.hideBuiltInItems();
var item1:ContextMenuItem = new ContextMenuItem("Option 1");
item1.addEventListener(ContextMenuEvent.MENU_ITEM_SELECT, handleOption1);
myMenu.customItems.push(item1);
var item2:ContextMenuItem = new ContextMenuItem("Option 2");
item2.addEventListener(ContextMenuEvent.MENU_ITEM_SELECT, handleOption2);
myMenu.customItems.push(item2);
var item3:ContextMenuItem = new ContextMenuItem("Option 3");







var contextMenu = document.getElementById("contextMenu");
var myElement = document.getElementById("myElement");

myElement.addEventListener("contextmenu", function(event) {
    contextMenu.style.display = "block";
    contextMenu.style.left = event.clientX + "px";
    contextMenu.style.top = event.clientY + "px";
    event.preventDefault();
});

contextMenu.addEventListener("mouseleave", function() {
    contextMenu.style.display = "none";
});

function handleOption1() {
    // Handle option 1 click event
}

function handleOption2() {
    // Handle option 2 click event
}

function handleOption3() {
    // Handle option 3 click event
}