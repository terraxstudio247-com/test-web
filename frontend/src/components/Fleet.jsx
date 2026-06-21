import React, { useState } from 'react';
import { fleetData } from '../mock';
import { Users, Luggage, Wifi, Check } from 'lucide-react';

const tabs = ['All', 'First Class', 'Ultra Luxury SUV'];

const Fleet = ({ onCtaClick }) => {
  const [active, setActive] = useState('All');

  const filtered =
    active === 'All' ? fleetData : fleetData.filter((v) => v.tier === active);

  return (
    <section id="fleet" className="relative bg-[#0B0C10] py-28 md:py-36">
      <div className="max-w-7xl mx-auto px-6 md:px-10">
        <div className="flex flex-col items-center text-center mb-16">
          <div className="flex items-center gap-4 mb-6">
            <span className="h-px w-10 bg-[#C5A059]/70" />
            <span className="text-[10px] uppercase tracking-[0.5em] text-[#C5A059]">
              The Fleet
            </span>
            <span className="h-px w-10 bg-[#C5A059]/70" />
          </div>
          <h2 className="font-serif text-4xl md:text-5xl text-[#E5E5E5] leading-tight max-w-3xl">
            A Curated Selection of the World's Finest Executive Vehicles
          </h2>
          <p className="mt-6 text-[#E5E5E5]/60 max-w-2xl font-light">
            Every vehicle in our fleet is maintained to manufacturer specification and prepared
            with meticulous attention to detail before each journey.
          </p>
        </div>

        {/* Tabs */}
        <div className="flex flex-wrap items-center justify-center gap-2 md:gap-3 mb-14">
          {tabs.map((t) => (
            <button
              key={t}
              onClick={() => setActive(t)}
              className={`px-6 py-3 text-[10px] md:text-[11px] uppercase tracking-[0.3em] border transition-colors duration-300 ${
                active === t
                  ? 'border-[#C5A059] bg-[#C5A059] text-[#0B0C10]'
                  : 'border-[#E5E5E5]/15 text-[#E5E5E5]/70 hover:border-[#C5A059] hover:text-[#C5A059]'
              }`}
            >
              {t}
            </button>
          ))}
        </div>

        {/* Cards */}
        <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          {filtered.map((v) => (
            <article
              key={v.id}
              className="group relative bg-[#1F2833]/60 border border-[#E5E5E5]/8 hover:border-[#C5A059]/60 transition-colors duration-500 flex flex-col overflow-hidden"
            >
              <div className="relative aspect-[4/3] overflow-hidden bg-[#0B0C10]">
                <img
                  src={v.image}
                  alt={v.name}
                  className="w-full h-full object-cover opacity-85 group-hover:opacity-100 group-hover:scale-105 transition-transform duration-[1200ms] ease-out"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-[#0B0C10] via-[#0B0C10]/30 to-transparent" />
                <span className="absolute top-5 left-5 px-3 py-1.5 text-[9px] uppercase tracking-[0.3em] text-[#C5A059] border border-[#C5A059]/50 bg-[#0B0C10]/60 backdrop-blur-md">
                  {v.tier}
                </span>
              </div>

              <div className="p-7 flex flex-col flex-1">
                <h3 className="font-serif text-2xl text-[#E5E5E5] leading-tight">
                  {v.name}
                </h3>
                <p className="mt-2 text-sm text-[#E5E5E5]/55 italic">{v.tagline}</p>

                {/* Specs row */}
                <div className="mt-6 grid grid-cols-3 gap-3 border-y border-[#E5E5E5]/10 py-5">
                  <div className="flex flex-col items-center text-center gap-1.5">
                    <Users size={16} className="text-[#C5A059]" strokeWidth={1.5} />
                    <span className="text-[10px] uppercase tracking-[0.18em] text-[#E5E5E5]/50">
                      Passengers
                    </span>
                    <span className="text-sm text-[#E5E5E5]">{v.specs.passengers}</span>
                  </div>
                  <div className="flex flex-col items-center text-center gap-1.5 border-x border-[#E5E5E5]/10">
                    <Luggage size={16} className="text-[#C5A059]" strokeWidth={1.5} />
                    <span className="text-[10px] uppercase tracking-[0.18em] text-[#E5E5E5]/50">
                      Luggage
                    </span>
                    <span className="text-sm text-[#E5E5E5]">{v.specs.luggage}</span>
                  </div>
                  <div className="flex flex-col items-center text-center gap-1.5">
                    <Wifi size={16} className="text-[#C5A059]" strokeWidth={1.5} />
                    <span className="text-[10px] uppercase tracking-[0.18em] text-[#E5E5E5]/50">
                      Wi-Fi
                    </span>
                    <span className="text-sm text-[#E5E5E5]">Onboard</span>
                  </div>
                </div>

                {/* Features */}
                <ul className="mt-6 space-y-2.5 flex-1">
                  {v.features.map((f) => (
                    <li
                      key={f}
                      className="flex items-center gap-3 text-sm text-[#E5E5E5]/70 font-light"
                    >
                      <Check size={14} className="text-[#C5A059]" strokeWidth={2} />
                      {f}
                    </li>
                  ))}
                </ul>

                <button
                  onClick={onCtaClick}
                  className="mt-8 w-full py-4 text-[11px] uppercase tracking-[0.32em] border border-[#C5A059]/70 text-[#C5A059] hover:bg-[#C5A059] hover:text-[#0B0C10] transition-colors duration-300"
                >
                  Request Quote
                </button>
              </div>
            </article>
          ))}
        </div>
      </div>
    </section>
  );
};

export default Fleet;
