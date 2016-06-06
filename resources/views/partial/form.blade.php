<form class="boot-form" method="post" action="{{route('generate.app')}}">
    <div class="form-inline text-center">
        <div class="project-format form-group">
            <span>Choice archive format
            <select class="form-control">
                <option selected value="zip">zip</option>
                <option value="rar">rar</option>
                <option value="tar">tar</option>
                <option value="gzip">gzip</option>
            </select>
            </span>
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        </div>
    </div>
    <div class="project-data row">
        <div class="col-md-6">
            <h2>Project Metadata</h2>
            <div class="form-group">
                <label for="PackageName">Package name</label>
                <input type="text" name="PackageName" class="form-control" id="PackageName" value="defaul">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control" id="description" value="default Laravel project">
            </div>
        </div>
        <div class="col-md-6">
            <h2>Dependencies</h2>
            <div class="form-group">
                <label for="backend">Backend <span class="specifically">filling composer.json</span></label>
                <input type="text" name="backend" class="form-control" id="backend" placeholder="package name">
            </div>
            <div class="form-group">
                <label for="frontend">Frontend <span class="specifically">filling package.json</span></label>
                <input type="text" name="frontend" class="form-control" id="frontend" placeholder="package name">
            </div>
        </div>
    </div>
    <div class="action-button text-center">
        <button type="submit" class="make-button btn">Make Project</button>
    </div>
</form>
