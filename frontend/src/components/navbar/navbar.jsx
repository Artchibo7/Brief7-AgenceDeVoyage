"use client";

import "./navbar.css";

export default function Navbar() {
  return (
    <div className="footer">
      <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <h1>Art & Voyage</h1>
        </div>
        <div class="nav-links">
          <a class="accueil" href="#">
            Accueil
          </a>
          <a class="destination" href="#">
            Destination
          </a>
          <a class="contact" href="#">
            Contact
          </a>
        </div>
      </nav>
    </div>
  );
}
