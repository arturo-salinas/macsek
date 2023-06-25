import { Navigation, Pagination, Scrollbar, A11y } from 'swiper';
import { Swiper, SwiperSlide } from 'swiper/react';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

export default function MySwiper() {
  return (
   <Swiper
      // install Swiper modules
      modules={[Navigation, Pagination, Scrollbar, A11y]}
      spaceBetween={10}
      slidesPerView={1}
      navigation
      pagination={{ clickable: true }}
      scrollbar={{ draggable: true }}
      onSwiper={(swiper) => console.log(swiper)}
      onSlideChange={() => console.log('slide change')}
    >
      <SwiperSlide><img width="1200" src="/src/photos/1.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/2.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/3.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/4.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/9.jpeg"></img></SwiperSlide>
      <SwiperSlide><img width="1200" src="/src/photos/11.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/14.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/17.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/18.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/19.jpeg"></img></SwiperSlide>
      <SwiperSlide><img width="1200" src="/src/photos/21.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/22.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/23.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/25.jpeg"></img></SwiperSlide>
      <SwiperSlide><img height="700" src="/src/photos/26.jpeg"></img></SwiperSlide>
    </Swiper>
  );
}