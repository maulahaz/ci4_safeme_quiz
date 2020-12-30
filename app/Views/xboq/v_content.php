<!-- Styling -->
<style>
.listile {
  display: flex;
}
.list-item {
  flex: 1;
  display: flex;
  justify-content: center;
}
.listile .leading{
    flex: 1;
}
.listile .title{
    flex: 5;
}
.listile .trailing{
    flex: 1;
}
/* .listile .leading > span { margin-right: auto; } */
.listile .title > span { margin-right: auto;  }
/* .listile .trailing > span { margin-left: auto;  } */

/* non-essential */
.list-item {
  align-items: center;
  /* border: 1px solid #ccc; */
  background-color: lightgreen;
  height: 40px;
  margin-bottom:5px;
}
</style>

<!-- Content -->
<div data-role="main" class="ui-content">
    <p>Data Yang Sembuh</p>
    <!-- <div class="listile">
        <div class="list-item leading"><span class="fa fa-bars"></span></div>
        <div class="list-item title"><span>Title of List item</span></div>
        <div class="list-item trailing"><span class="fa fa-trash"></span></div>
    </div> -->
    <div class="data-list"></div>
    


</div>