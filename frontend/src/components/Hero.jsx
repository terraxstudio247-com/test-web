import React from 'react';
import { heroImage } from '../mock';
import { ArrowDown } from 'lucide-react';

const Hero = ({ onCtaClick }) => {
  const scrollToFleet = () => {
    const el = document.querySelector('#fleet');
    if (el) el.scrollIntoView({ behavior: 'smooth' });
  };

  return (
    <section
      id="top"
      className="relative min-h-screen w-full flex items-center justify-center overflow-hidden"
    >
      {/* Background image */}
      <div className="absolute inset-0">
        <img
          src={heroImage}
          alt="Luxury sedan at night"
          className="w-full h-full object-cover"
        />
        <div className="absolute inset-0 bg-gradient-to-b from-[#0B0C10]/85 via-[#0B0C10]/70 to-[#0B0C10]" />
        <div className="absolute inset-0 bg-[#0B0C10]/40" />
        {/* Subtle colored ambient glows */}
        <div className="absolute -top-32 -left-32 w-[480px] h-[480px] rounded-full bg-[#14B8A6] opacity-[0.10] blur-[120px] pointer-events-none" />
        <div className="absolute top-1/3 -right-32 w-[520px] h-[520px] rounded-full bg-[#C5A059] opacity-[0.08] blur-[140px] pointer-events-none" />
        <div className="absolute bottom-0 left-1/3 w-[420px] h-[420px] rounded-full bg-[#A855F7] opacity-[0.07] blur-[140px] pointer-events-none" />
      </div>

      {/* Soft grain */}
      <div
        className="absolute inset-0 opacity-[0.05] pointer-events-none mix-blend-overlay"
        style={{
          backgroundImage:
            'url("data:image/svg+xml;utf8,<svg xmlns=%27http://www.w3.org/2000/svg%27 width=%27200%27 height=%27200%27><filter id=%27n%27><feTurbulence baseFrequency=%270.9%27/></filter><rect width=%27100%25%27 height=%27100%25%27 filter=%27url(%23n)%27/></svg>")',
        }}
      />

      <div className="relative z-10 max-w-6xl mx-auto px-6 md:px-10 text-center pt-24">
        {/* Eyebrow */}
        <div className="flex items-center justify-center gap-4 mb-8">
          <span className="h-px w-10 bg-[#C5A059]/70" />
          <span className="text-[10px] md:text-[11px] uppercase tracking-[0.5em] text-[#C5A059]">
            Executive Chauffeur Service
          </span>
          <span className="h-px w-10 bg-[#C5A059]/70" />
        </div>

        <h1 className="font-serif text-[#E5E5E5] text-4xl sm:text-5xl md:text-7xl leading-[1.05] tracking-tight">
          <span className="text-[#14B8A6]">Precision</span>, <span className="text-[#C5A059]">Privacy</span>,
          <br />
          and <span className="italic bg-gradient-to-r from-[#C5A059] via-[#E9C77B] to-[#14B8A6] bg-clip-text text-transparent">Uncompromised</span> Luxury.
        </h1>

        <p className="mt-8 max-w-2xl mx-auto text-[#E5E5E5]/70 text-base md:text-lg leading-relaxed font-light">
            Laxora delivers a discreet, world-class chauffeur experience for executives,
          dignitaries, and private clientele across the world's most demanding cities.
        </p>

        <div className="mt-12 flex flex-col sm:flex-row items-center justify-center gap-5">
          <button
            onClick={onCtaClick}
            className="group relative px-10 py-4 bg-[#C5A059] text-[#0B0C10] text-[11px] uppercase tracking-[0.32em] font-medium hover:bg-[#d4b06a] transition-colors duration-300"
          >
            Request Quote
          </button>
          <button
            onClick={scrollToFleet}
            className="px-10 py-4 border border-[#E5E5E5]/30 text-[#E5E5E5] text-[11px] uppercase tracking-[0.32em] hover:border-[#C5A059] hover:text-[#C5A059] transition-colors duration-300"
          >
            Explore Fleet
          </button>
        </div>
      </div>

      {/* Scroll indicator */}
      <button
        onClick={scrollToFleet}
        className="absolute bottom-10 left-1/2 -translate-x-1/2 z-10 flex flex-col items-center gap-3 text-[#E5E5E5]/60 hover:text-[#C5A059] transition-colors"
      >
        <span className="text-[10px] uppercase tracking-[0.4em]">Scroll</span>
        <ArrowDown size={16} className="animate-bounce" />
      </button>
    </section>
  );
};

export default Hero;
