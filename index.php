<style>
    .form{
        display: flex;
        justify-content: center;
        align-items: start;
        margin-top: 100px;
    }

    .button{
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .row{
        margin-bottom: 10px;
    }
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<div class="form">
    <form action="result.php" method="post" style="width: 650px;">
        <div class="row">
            <label for="name" class="col-5">Name</label>
            <input type="text" name="name" class="col-7">
        </div>

        <div class="row">
            <label for="club" class="col-5">Club you want to apply</label>
            <select name="club" id="club" class="col-7">
                <option value="Robotic club">Robotic Club</option>
                <option value="Ghitar club">Ghitar Club</option>
            </select>
        </div>
        <div class="row">
            <label for="time" class="col-5">Be time for you</label>
            <div class="col-7">
                <input type="radio" id="s-m" name="time" value="Saturday mornings">
                <label for="s-m">Saturday mornings</label>
                <input type="radio" id="sa-a" name="time" value="Saturday afternoons">
                <label for="sa-a">Saturday afternoons</label><br>
                <input type="radio" id="s-a" name="time" value="Sunday afternoons">
                <label for="s-a">Sunday afternoons</label>
            </div>
        </div>

        <div class="row">
            <label for="skills" class="col-5">Yours skills</label>
            <div class="col-7">
                <input type="checkbox" id="coder" name="coder" value="the best coder">
                <label for="coder">The best coder</label>
                <input type="checkbox" id="arts" name="arts" value="good in arts">
                <label for="arts">Good in arts</label><br>
                <input type="checkbox" id="star" name="star" value="a super star">
                <label for="star">A super star</label>
                <input type="checkbox" id="dancer" name="dancer" value="a crazy dancer">
                <label for="dancer">A crazy dancer</label><br>
                <input type="checkbox" id="singer" name="singer" value="singer">
                <label for="singer">Singer</label>
                <input type="checkbox" id="design" name="design" value="good in design">
                <label for="design">Good in design</label><br>
                <input type="checkbox" id="eater" name="eater" value="the best eater">
                <label for="eater">The best eater</label>
                <input type="checkbox" id="speeches" name="speeches" value="good in speeches">
                <label for="speeches">Good in speeches</label>
            </div>
        </div>
 
        <div class="row button">
            <button type="submit" class="btn btn-danger">Submit !</button>
        </div>
    </form>
</div>