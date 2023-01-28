@csrf
<div class="form-group">
    <label for="name">Nombre</label>
    <input type="text" class="form-control" id="name" name="name" @isset($entity) value="{{$entity->name}}" @endisset placeholder="Ingrese un nombre" required>
</div>
<div class="form-group">
    <label for="hp">HP</label>
    <input type="number" class="form-control" id="hp" name="hp" @isset($entity)value="{{$entity->hp}}" @endisset  placeholder="Ingrese la vida"required>
</div>
<div class="form-group">
    <label for="atq">Ataque</label>
    <input type="number" class="form-control" id="atq"name="atq" @isset($entity)value="{{$entity->atq}}" @endisset  placeholder="Ingrese el ataque"required>
</div>
<div class="form-group">
    <label for="def">Defensa</label>
    <input type="number" class="form-control" id="def"name="def" @isset($entity)value="{{$entity->def}}" @endisset  placeholder="Ingrese la defensa"required>
</div>
<div class="form-group">
    <label for="luck">Suerte</label>
    <input type="number" class="form-control" id="luck" name="luck" @isset($entity)value="{{$entity->luck}}" @endisset  placeholder="Ingrese la suerte"required>
</div>

    
