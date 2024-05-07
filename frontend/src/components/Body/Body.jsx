"use client";

import "./body.css";
import Image from "next/image";

export default function Body() {
  return (
    <>
      <div className="body">
        <h1>Body</h1>
      </div>
      <h3>Destination coup de coeur</h3>
      <div class="card">
        <div class="card-body">
          <img
            src="./img/famous-buildings-round-the-world-travel-wallpaper.jpg"
            class="card-img-top"
            alt="le kremlin"
          />
          <h5 class="card-title">Un tour par Moscou?</h5>
          <p class="card-text">Visite guidée de Moscou par l’agence.</p>
          <a href="#" class="btn btn-secondary">
            Voir les détails
          </a>
        </div>
        <div class="card-body">
          <Image
            src="/famous-buildings-round-the-world-travel-wallpaper.jpg"
            width={300}
            height={300}
            alt="le kremlin"
          />
          <h5 class="card-title">Un tour par Moscou?</h5>
          <p class="card-text">Visite guidée de Moscou par l’agence.</p>
          <a href="#" class="btn btn-secondary">
            Voir les détails
          </a>
        </div>
      </div>
    </>
  );
}
