<body>
    <h1> Je suis le produit : {{$product->title}}</h1>
    <article>
        {{$product->description}}
    </article>
    <div>
        <h2>Mes caractéristiques</h2>
        <ul class="list-group">
            <li class="list-group-item">{{$product->calculatorVAT($product->id)}} €</li>
            <li class="list-group-item">{{$product->weight}} g</li>
            <li class="list-group-item">{{$product->vat}}</li>
        </ul>
    </div>
</body>

</html>
