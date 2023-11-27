<?php
require_once "config/connexion.php";
for ($i = 1; $i < 100; $i++) {
    $ref = $i + 1;
    $libelle = "produit n°$i";
    $prix = random_int(300, 3000);
    $qt = random_int(1, 200);
    $desc = "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Autem eum nisi recusandae obcaecati amet blanditiis facere magni laboriosam totam non tenetur cupiditate provident atque eos, quisquam asperiores, architecto adipisci voluptas.
Quidem illum laboriosam consequatur deserunt quisquam dolorem accusantium inventore ratione eum culpa assumenda ut perspiciatis quod harum quasi, distinctio cupiditate minima fugit natus debitis soluta! Nisi repellat unde distinctio consequatur.
Quis sint quod expedita quisquam recusandae veniam velit accusantium excepturi quibusdam eos voluptate, qui modi, nemo fugiat nisi perferendis ad, possimus laborum nostrum. Ullam, optio! Error dolorem nesciunt est amet?
Eius distinctio eum rerum cum fugit, sequi dolores et quam aperiam. Quia, quas aut ratione dolorem porro expedita necessitatibus tempore cupiditate ipsam officiis ut aliquid non ad fuga et ab?
Ipsa alias voluptatem et incidunt placeat veniam. Et saepe dolor ut voluptas, ea, quasi assumenda iure sequi vero temporibus in quas minima dolorum labore architecto deleniti? Alias eligendi velit unde.
Quis expedita dicta veniam aliquid a distinctio ea vitae omnis autem voluptates soluta voluptate libero, odio quasi ipsa facere. Eligendi harum veritatis accusantium sunt delectus, temporibus mollitia reiciendis beatae nulla.
Amet magni quia mollitia, unde corporis possimus delectus itaque iusto maiores quo incidunt consequatur tempore quam culpa cupiditate eveniet eligendi totam, architecto iste ab deserunt aliquam corrupti dolores! Voluptates, quidem.
Porro eaque repellendus nulla veritatis, odio dolore hic laudantium blanditiis ullam laborum aliquid laboriosam nam qui at, quo fugiat modi eius ratione tempore ipsam consectetur sint praesentium. Eos, perferendis quia!
Nihil ex perferendis a voluptas quam labore aspernatur in porro rem molestias? Similique, 
explicabo aperiam placeat enim vero suscipit quasi molestias repudiandae,
 velit optio sed exercitatione";
    $image = "https://picsum.photos/300/?random=$i";
    $promo = random_int(0, 1);


    $sql = "insert into produit values
('$ref','$libelle',$prix,$qt,'$image',$promo,'$desc')";
    $res = $connexion->exec($sql);
}
header("location:produits.php");
