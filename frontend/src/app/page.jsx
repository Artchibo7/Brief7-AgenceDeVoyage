"use client";

import "./page.css";
import Image from "next/image";
import React from "react";
import Navbar from "@/Components/Navbar/Navbar";
import Body from "@/Components/Body/Body";
import Footer from "@/Components/Footer/Footer";

export default function Home() {
  return (
    <>
      <Navbar />
      <Body />
      <Footer />
    </>
  );
}
