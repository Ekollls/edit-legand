<div class="contentContainer">
    <div id="content" class="messages messagesInbox">
        <h1 class="titleInHeader">ساختمان سازی</h1>
        <a type="button" id="tabFavorButton" class="icon contentTitleButton buttonFramed green withIcon rectangle" href="#" onclick="toggleDefaultTab(currentTab)">
            <img src="/img/x.gif" class="&nbsp;" alt="">
        </a>
        <div class="contentNavi subNavi">
            <div class="contentNavi tabFavorWrapper">
                <button type="button" class="scrollFrom" disabled="disabled"></button>
                <div class="scrollingContainer">
                    <div class="content favor favorKeyplayer">
                        <a id="buttonW1" title="" class="tabItem normal" style="font-family: IRANSans;" href="#" data-tab="tab1">زیرساختی</a>
                    </div>
                    <div class="content favor favorKeyalliance">
                        <a  title="" class="tabItem" href="nachrichten.php?t=2" data-tab="tab2"> نظامی </a>
                    </div>
                    <div class="content favor favorKeyvillage">
                        <a id="buttonF3" title="" class="tabItem" href="#" data-tab="tab3">منابع بیشتر </a>
                    </div>
                    
                
                </div>
                <button type="button" class="scrollTo" disabled="disabled"></button>
            </div>
        </div>
        <div class="tab-content <?php if((isset($_GET['category']) && $_GET['category'] == 1)){ echo'active'; }else{ echo 'normal'; } ?>" id="tab1">
            
            <?php
            
                include("application/views/Message/read.php");
           
            ?>
            <button class="default-btn" onclick="toggleDefaultTab('tab1')"></button>
        </div>
        <div class="tab-content         <?php if((isset($_GET['category']) && $_GET['category'] == 2)){ echo'active'; }else{ echo 'normal'; } ?> " id="tab2">
            <?php
            include("application/views/Message/write.php");
            ?>
            </div> 
        
            <button class="default-btn" onclick="toggleDefaultTab('tab2')"></button>
        </div>
        <div class="tab-content <?php if((isset($_GET['category']) && $_GET['category'] == 3)){ echo'active'; }else{ echo 'normal'; } ?>" id="tab3">
            <?php
            include("application/views/Message/sent.php");
           
            ?>
            
            <button class="default-btn" onclick="toggleDefaultTab('tab3')"></button>

        </div>
        
        
        
       
    </div>