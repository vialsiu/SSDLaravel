<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('posts')->insert([
            [
                'id' => 8,
                'slug' => 'love-the-sentinel',
                'title' => 'Love the Sentinel',
                'description' => 'Jean-Honoré Fragonard frequently revisited the compositions featured in the pendant paintings Love as Folly and Love the Sentinel throughout his career. The National Gallery of Art holds two sets of these works. In Love the Sentinel, a cherubic Cupid stands before a blooming rosebush near the boundary of a garden or park, as indicated by a balustrade in the background. He gazes outward while extending an arrow and placing a finger to his lips, a quiver resting at his feet as two doves take flight against a cloudy sky. Love as Folly presents a similar figure in an airborne pose, energetically waving a stick adorned with a jester\'s cap. His lively movement startles a nearby flock of doves, some of which remain on the ground. The two paintings were evidently created as a complementary pair, with their figures positioned to face each other, balancing the stability of the grounded putto in Love the Sentinel against the dynamic motion of the airborne Cupid in Love as Folly.

Art historians typically place the various versions of these compositions in the early 1770s, attributing their dating to stylistic elements. The bright palette, expressive brushwork, and playful subject matter align with many of Fragonard’s smaller oval paintings from that period. Around the same time, he was working on The Progress of Love, his renowned series of decorative paintings, created between 1771 and 1772 for Madame du Barry’s pleasure pavilion at Louveciennes, now housed in the Frick Collection in New York. The two Love paintings bear a strong resemblance to a pair of overdoor paintings associated with this commission, though they differ in format and scale. The Frick overdoors are rectangular rather than oval and feature mirrored compositions compared to the smaller canvases.

The exact connection between the different iterations of Love as Folly and Love the Sentinel and the Frick’s overdoor paintings remains uncertain. Scholars debate when Fragonard produced the overdoors, as they are not always considered part of Madame du Barry’s original commission. When the primary panels of The Progress of Love were ultimately rejected, Fragonard stored them until 1790, when he relocated them to his cousin Alexandre Maubert’s residence in Grasse. At that time, he expanded the series by adding additional works, including a fifth large painting, narrow canvases depicting hollyhocks, and a chimneypiece titled Love Triumphant, in which a group of putti ascend through clouds of smoke, one of them brandishing two flaming torches. Scholars generally believe that the four overdoor paintings date to this later period, between 1790 and 1791. Given that engraver Jean François Janinet produced prints of Love as Folly and Love the Sentinel in 1777, art dealer René Gimpel proposed that Fragonard may have used these engravings as references when creating the overdoors in Grasse, which would explain their reversed compositions. However, art historian Pierre Rosenberg has suggested that the overdoors were indeed part of Madame du Barry’s original commission, placing their execution in the same timeframe as the smaller oval paintings.',
                'image_path' => '67dc6fc1189df-Love the Sentinel.jpg',
                'created_at' => '2025-03-20 19:42:57',
                'updated_at' => '2025-03-20 19:42:57',
                'user_id' => 1,
                'artist' => 'Jean Honoré Fragonard',
                'medium' => 'Oil on canvas',
                'origin' => 'France',
                'year' => 'c. 1773/1776',
            ],
            [
                'id' => 9,
                'slug' => 'madame-du-barry',
                'title' => 'Madame du Barry',
                'description' => 'Shown from the knees up, a woman stands facing and looking at us with her head tilted a little to our left in this vertical portrait painting. She has pale skin, a heart-shaped face with rosy cheeks, and a rose-pink bow mouth. Thin, arched, sable-brown eyebrows frame her gray eyes. A wreath of pale pink flowers and curling white ostrich feathers crowns her long gray hair, which is piled high on her head. Loose curly tendrils brush both shoulders. Her glowing, silver satin gown is trimmed with delicate sheer lace around the wide, plunging neckline and sleeves, and has a pink sash around her narrow waist. Pearl bracelets adorn her wrists. She leans to her left, our right, to rest her left elbow against a waist-high, cinnamon-brown stone pedestal, which is decorated with a bronze-colored garland and bow on the side facing us. A ring of blue, yellow, red, and pink flowers, woven with strands of ivy, dangles in the hand resting on the pedestal. Her right hand hangs loosely by her side. Along the left edge of the dimly lit background, a tree with a thick trunk angles into the upper left corner. A smaller sapling grows just in front of it. On the right, bushes with olive and fern-green leaves dotted with lilac-purple flecks rise above the pedestal. Dark clouds fill most of the top third of the canvas but they part around her head to reveal the soft blue sky. The artist signed and dated the work in white in the lower right corner, “L. Vigée Le Brun 1782.”',
                'image_path' => '67dc7bb524b23-Madame du Barry.jpg',
                'created_at' => '2025-03-20 20:33:57',
                'updated_at' => '2025-03-20 20:33:57',
                'user_id' => 1,
                'artist' => 'Élisabeth Louise Vigée Le Brun',
                'medium' => 'Oil on canvas',
                'origin' => 'France',
                'year' => '1782',
            ],
            [
                'id' => 10,
                'slug' => 'a-painter-s-studio',
                'title' => "A Painter's Studio",
                'description' => 'In a room filled with easels, white plaster heads and statuettes, a box of paints, books, and papers, a young woman stands looking at a sketch while a young girl looks on, seated in an armchair, in this vertical painting. The scene is lit from the upper left, presumably from a window out of our view. Both women have smooth, pale skin, and their hair is swept up with curls framing their faces. They face our right in profile so their faces are in gentle shadow. They have straight noses, and their rose-pink lips are closed. They wear gowns with short sleeves, low, scooped necks, and floor-length skirts cinched under the bust. In the center of the painting, the young woman has chestnut-brown hair and wears a white gown tied with a sky-blue ribbon. She stands in front of a portfolio propped up against a tall easel. The portfolio is made of two stiff boards that tie together with pale blue ribbon to secure large sheets of paper. She rests her right hand, closer to us, on the front board of the portfolio and looks down at the sketch on a gray piece of paper she holds with her other hand. Next to her and closer to us, the younger girl sits in a gold chair upholstered with olive-green velvet. She faces our right almost in profile, and she looks up toward the drawing the other woman holds. The girl in the chair has blond hair and a gold-colored dress. Her feet are propped on a gold footstool, and she holds another portfolio on her lap. She supports the portfolio and holds a piece of paper with one hand, and a stylus or brush in the other hand, up by her chin. To the right of the easel, a wooden table holds a collection of plaster casts of faces, a hand, and small-scale bodies along with a glass vessel and a few other tools. Two translucent green bottles, boxes, a book, and a terracotta vase are collected on the footstool and the floor around the base of the easel. Garnet-red cloths are draped down the front of the table to our right and behind the girl on the chair. Next to her chair, in the lower left corner of the composition, is a wooden box with a paint palette and a handful of thin paintbrushes. A scroll of paper lies next to the box. A shelf at the standing girl’s shoulder height and behind the pair, to our left, is piled with white busts of a man, child, and woman, more figurines, and a brush in a small cup, all arranged across a moss-green cloth. The space with the girls and artist’s tools is enclosed by a large, dark brown form, presumably a canvas in shadow, that leans against the tall easels and mostly cuts off a view into the rest of the room. A glimpse of shadowy capitals is seen over the board, across the top of the painting, to suggest that a row of columns recedes into the space beyond. The artist signed the work as if he had painted his name on the floor next to the scroll, “L. Boilly.”',
                'image_path' => "67dc7c1a07f82-A Painter's Studio.jpg",
                'created_at' => '2025-03-20 20:35:38',
                'updated_at' => '2025-03-20 20:35:38',
                'user_id' => 1,
                'artist' => 'Louis-Léopold Boilly',
                'medium' => 'Oil on canvas',
                'origin' => 'France',
                'year' => 'c. 1800',
            ],
            [
                'id' => 11,
                'slug' => 'forest-interior-with-a-waterfall-papigno',
                'title' => 'Forest Interior with a Waterfall, Papigno',
                'description' => 'Gift of Mrs. John Jay Ide in memory of Mr. and Mrs. William Henry Donner.',
                'image_path' => '67dc7ca13fd01-Forest Interior with a Waterfall, Papigno.jpg',
                'created_at' => '2025-03-20 20:37:53',
                'updated_at' => '2025-03-20 20:37:53',
                'user_id' => 1,
                'artist' => 'André Giroux',
                'medium' => 'Oil on paper',
                'origin' => 'France',
                'year' => '1825/1830',
            ],
            [
                'id' => 12,
                'slug' => 'swiss-landscape',
                'title' => 'Swiss Landscape',
                'description' => 'We look out over a patchwork of cultivated fields that slope down to our right and back to an ice-blue lake in this nearly square landscape painting. Rectangular fields fill the lower half of the composition in fern green, caramel brown, and golden tan. Sage-colored trees and bushes with dark brown trunks and branches separate the strip of grassy earth closest to us from the fields just beyond, and are scattered like tufts through the landscape. A rocky, slate-gray mountain brushed with lime-green trees that rises along the left edge of the canvas curves around a wedge of the arctic-blue lake. A few wispy cream-white clouds line the horizon, which comes about halfway up the composition.',
                'image_path' => '67dc7cfd57a60-Swiss Landscape.jpg',
                'created_at' => '2025-03-20 20:39:25',
                'updated_at' => '2025-03-20 20:39:25',
                'user_id' => 1,
                'artist' => 'Alexandre Calame',
                'medium' => 'Oil on paper on canvas',
                'origin' => 'Switzerland',
                'year' => 'c. 1830',
            ],
            [
                'id' => 13,
                'slug' => 'shakuntala',
                'title' => 'Shakuntala',
                'description' => 'Raja Ravi Varma, a legend in Indian art, immortalized epic moments from ancient scriptures. "Shakuntala" is an enchanting story of love and desire, showcasing the delicate scene where Shakuntala, a key figure from the Mahabharata, feigns removing a thorn while covertly seeking her beloved, Dushyanta. Varma\'s careful focus on specifics and his combination of Indian and European methods bring the painting to life. The fusion of light, feelings, and elegance depicts a timeless romance on the canvas, resonating with future generations.',
                'image_path' => '67dc7e7c51f76-Shakuntala.jpg',
                'created_at' => '2025-03-20 20:45:48',
                'updated_at' => '2025-03-20 20:45:48',
                'user_id' => 2,
                'artist' => 'Raja Ravi Varma',
                'medium' => 'Oil on canvas',
                'origin' => 'India',
                'year' => 'c. 1870',
            ],
            [
                'id' => 14,
                'slug' => 'the-night-revels-of-han-xizai',
                'title' => 'The Night Revels of Han Xizai',
                'description' => 'This painting is divided into five distinct sections and bears the seal of Shi Miyuan, a Song dynasty official. Moving from right to left, the scenes depict Han Xizai enjoying a pipa performance, playing a drum to accompany dancers, resting with companions, observing five female musicians playing flutes, and finally bidding farewell to his guests. During the early Tang period, musicians traditionally played while seated on floor mats, but this artwork illustrates them sitting on chairs, reflecting the cultural shifts of the time. Gu Hongzhong deliberately infused the scene with a subdued atmosphere, as none of the figures display any expressions of joy. The painting served as a means for Li Yu to ease his suspicions about Han Xizai, though it ultimately did little to prevent the decline of his rule.

The first section of the artwork captures a moment of musical appreciation. Han Xizai, distinguished by his tall hat and full beard, is seated on a couch alongside Lang Can, a scholar who achieved the highest rank in the imperial examinations. They listen intently to a pipa performance by the sister of Li Jiaming, the assistant director of the Imperial Theatre and Music Academy, who watches closely. To her left, dressed in light blue, is Wang Wushan, a skilled dancer in Han Xizai\'s service. Behind her stands Han\'s student, Shu Ya. Nearby, seated at a table, are two guests: Chen Zhiyong, an official overseeing ritual ceremonies, and his student Zhu Xian.

In the second segment, Wang Wushan performs a dance while Han Xizai beats a drum to set the rhythm. The onlookers focus on her graceful movements, with the exception of Han’s friend, the monk Deming, who bows his head and folds his hands in discomfort. Despite his unease, he remains drawn to the performance. The third scene portrays Han Xizai reclining on a couch, washing his hands in a basin, accompanied by four female attendants. The fourth part features five women playing flutes as Han, seated with his robe unfastened, watches them. In the final scene, Han Xizai holds two drumsticks in one hand while gesturing a farewell to his guests with the other. A male guest leans toward a maid, seemingly whispering something to her. Screens seamlessly connect these five scenes, guiding the viewer’s eye through the unfolding narrative.

An inscription at the beginning of the scroll, written by a collector from the Southern Song period, briefly introduces Han Xizai in twenty characters. The Ming dynasty calligrapher Cheng Nanyun later added a three-character title, "Night Revelry" (Yeyan tu). At the scroll’s conclusion, a label in flowing script reads *A Brief Biography of Han Xizai* (Han Xizai xiaozhuan), accompanied by multiple authentication seals. During the Qing dynasty, the Qianlong Emperor (r. 1736–1795) inscribed a colophon after the painting. The artwork was later cataloged in *The Precious Collection of the Stone Moat* (Shiqu Baoji), a comprehensive record of the Qianlong Emperor’s collection of calligraphy and paintings.',
                'image_path' => '67dc7f2c0701a-The Night Revels of Han Xizai.jpg',
                'created_at' => '2025-03-20 20:48:44',
                'updated_at' => '2025-03-20 20:48:44',
                'user_id' => 2,
                'artist' => 'Gu Hongzhong',
                'medium' => 'Ink and color on silk',
                'origin' => 'China',
                'year' => '10th-century',
            ],
            [
                'id' => 15,
                'slug' => 'equestrian-portrait-of-alexander-ii',
                'title' => 'Equestrian portrait of Alexander II',
                'description' => 'The Equestrian Portrait of Alexander II is a grand depiction of the Russian emperor, capturing both his regal authority and the military prowess associated with his reign. The painting presents Alexander II astride a powerful, well-muscled horse, dressed in an opulent military uniform adorned with intricate details, medals, and a flowing cape. His posture is upright and commanding, exuding confidence and control, while the horse’s dynamic stance, with one hoof lifted, conveys motion and strength. The backdrop, featuring a vast open sky and an expansive landscape, reinforces the grandeur and significance of the subject, suggesting both imperial dominance and the vastness of the Russian empire.

This portrait follows the long-standing tradition of equestrian imagery used to glorify rulers, drawing parallels to European monarchs depicted in similar poses. The artist skillfully employs light and shadow to highlight Alexander II as the central figure, emphasizing his role as a leader and reformer. His expression is resolute yet contemplative, perhaps alluding to the weight of his rule during a period of significant political and social transformation, including the emancipation of the serfs in 1861.

The meticulous attention to detail extends to the depiction of textures—the gleam of the emperor’s polished boots, the softness of the horse’s mane, and the richness of the embroidered fabric. The brushwork in the sky and background creates depth, drawing the viewer’s eye toward the imposing figure of Alexander II.

At the time of its creation, the painting served as both a tribute and a propaganda piece, reinforcing the image of Alexander II as a strong, yet progressive leader. Its composition echoes the classical European tradition of equestrian portraiture, while the refined realism and grandeur of the work firmly root it in the artistic conventions of 19th-century Russian portraiture.',
                'image_path' => '67dc802835688-Equestrian portrait of Alexander II.jpg',
                'created_at' => '2025-03-20 20:52:56',
                'updated_at' => '2025-03-20 20:52:56',
                'user_id' => 2,
                'artist' => 'Ilya Repin',
                'medium' => 'Oil on canvas',
                'origin' => 'Russia',
                'year' => '1913',
            ],
            [
                'id' => 16,
                'slug' => 'soap-bubbles',
                'title' => 'Soap Bubbles',
                'description' => 'A young man and child, both with pale skin, are framed within the rectangular opening of a stone window in this vertical painting. At the center, the young man leans toward us over his forearms, which rest on the wide ledge. Angled to our right, he holds a long straw to his mouth to blow a large, glistening bubble that hangs on the opposite end. A second straw rests in a glass cup filled with white liquid, presumably soapy water, that sits near his right elbow, on our left, and he looks down at the bubble. His chestnut-brown hair is tied back with a black ribbon, and curls hang down from his temple. He wears a brown jacket over a white shirt. A younger child peeks over the ledge to our right and also looks at the bubble. Seen from the nose up, the child wears a hat that curves up and over the crown of the head. The face of the brown stone building into which the window is cut seems close to us. A vine of ivy climbs up the face of the building to our left.',
                'image_path' => '67dc809cc5787-Soap Bubbles.jpg',
                'created_at' => '2025-03-20 20:54:52',
                'updated_at' => '2025-03-20 20:54:52',
                'user_id' => 2,
                'artist' => 'Jean Siméon Chardin',
                'medium' => 'Oil on canvas',
                'origin' => 'France',
                'year' => '1733/1734',
            ],
            [
                'id' => 19,
                'slug' => 'the-japanese-footbridge',
                'title' => 'The Japanese Footbridge',
                'description' => 'A pale turquoise footbridge arching over a pond lined with tall grasses and filled with petal-pink and butter-yellow waterlilies spans this horizontal landscape painting. The scene is loosely painted with touches of vibrant color. In the top third of the composition, the shallowly arched bridge nearly touches the top edge of the canvas, and it extends off each side. The shadows on the bridge are painted with eggplant purple. Bands of waterlilies gently zigzag into the distance on the surface of the water. The spring and emerald-green grasses growing along the banks fill the space around and over the pond, and they blend into a screen of trees beyond that enclose the scene. The green of the grasses and trees is reflected in the surface of the water, as is the underside of the bridge. The artist signed and dated the work with dark paint in the lower right corner: “Claude Monet 99.”',
                'image_path' => '67df2835b5d22-The Japanese Footbridge.jpg',
                'created_at' => '2025-03-22 21:14:29',
                'updated_at' => '2025-03-22 21:17:09',
                'user_id' => 2,
                'artist' => 'Claude Monet',
                'medium' => 'Oil on Canvas',
                'origin' => 'France',
                'year' => '1899',
            ],
            [
                'id' => 20,
                'slug' => 'cosmos-convention',
                'title' => 'Cosmos Convention',
                'description' => 'This body of work was inspired by the garden planted by a free-spirited, beautiful young French chef who farmed on our property for two wonderful farm-to-table years. In between rows of tomatoes, cucumbers, and squash and so many other delectable edibles, she planted swaths of dahlias, cosmos, and wildflowers too many to name. I started documenting these blooms in their various forms and created an archive of images. During Covid, when everything around us went dark, I reached for color and the Bloom series was born.',
                'image_path' => '67df315bd9105-Cosmos Convention.png',
                'created_at' => '2025-03-22 21:53:31',
                'updated_at' => '2025-03-22 21:53:31',
                'user_id' => 1,
                'artist' => 'Carol Paquet',
                'medium' => 'Giclée Print',
                'origin' => 'Zambia',
                'year' => '2021',
            ],
            [
                'id' => 21,
                'slug' => 'cosmic-sight-iv',
                'title' => 'Cosmic Sight IV',
                'description' => 'This work is entirely formed by small motifs drawn in slow movements, directed by the rhythm of the breathing. The image was inspired from the intracellular milieu. It’s an exploration of infinitely small that has the power to provide the intimacy of beings and things and to awake the earlier dreams of the joy of intimacy.',
                'image_path' => '67df324d279d3-Cosmic Sight IV.png',
                'created_at' => '2025-03-22 21:57:33',
                'updated_at' => '2025-03-22 21:57:33',
                'user_id' => 1,
                'artist' => 'Ghada Chamma',
                'medium' => 'Acrylic on canvas',
                'origin' => 'Tunisia',
                'year' => '2018',
            ],
            [
                'id' => 22,
                'slug' => 'for-me-to-live-is',
                'title' => 'FOR ME TO LIVE IS',
                'description' => 'I am Brave but I Bleed.
I’m trying to answer the age-old question: Why did you paint this?

My beliefs are truths that have been formed by a constant trickle of thoughts through my mind, depositing their positive, negative and indifferent impressions as they run through, like stalactites and stalagmites in your head, like roses with thorns.

What happens if the thorns prick me and I bleed. What am I bleeding? Despair, angst, hope, miraculous impossibilities?

I grew up in a lake of bitterness and despair, with waves of resentment and storms of anger.

Learned early on that I had to be strong and courageous as no one else was going to protect me. No one would stand up and ransom me. I had to be brave…

Much later in life, I learned that each person’s name has a meaning. We are not named randomly. Every person’s name describes their calling.',
                'image_path' => '67df32ebecfe2-FOR ME TO LIVE IS.png',
                'created_at' => '2025-03-22 22:00:11',
                'updated_at' => '2025-03-22 22:00:11',
                'user_id' => 1,
                'artist' => 'Leonie E Brown',
                'medium' => 'Acrylic on canvas',
                'origin' => 'South Africa',
                'year' => '2018',
            ],
            [
                'id' => 23,
                'slug' => 'derrame-espiritual',
                'title' => 'Derrame Espiritual',
                'description' => 'I was inspired by the depths of the earth, from the most intimate, naked with nature. In perfect harmony with the immensity.',
                'image_path' => '67df337f05a4d-Derrame Espiritual.png',
                'created_at' => '2025-03-22 22:02:39',
                'updated_at' => '2025-03-22 22:12:34',
                'user_id' => 1,
                'artist' => 'Fernando Bosch',
                'medium' => 'Spraypaint',
                'origin' => 'Spain',
                'year' => '2020',
            ],
            [
                'id' => 24,
                'slug' => 'so-soft-and-so-lignt-2',
                'title' => 'so soft and so lignt',
                'description' => 'Oil on cradled canvas panel (mdf). A very textured painting of an imaginary woman surrounded by flowers... maybe a bride? The material aspect of the background contrasts with the woman\'s face, quite blurred.',
                'image_path' => '67df3412df457-so soft and so lignt.png',
                'created_at' => '2025-03-22 22:05:06',
                'updated_at' => '2025-03-22 22:18:43',
                'user_id' => 1,
                'artist' => 'Marta Grassi',
                'medium' => 'Oil on canvas panel',
                'origin' => 'France',
                'year' => '2021',
            ],
            [
                'id' => 25,
                'slug' => 'further',
                'title' => 'Further',
                'description' => 'Via alluvial systems and the liquid dynamics of paint, I\'m aiming to create works that give something different each time you return to them, like a favourite walk. A circuitous balance of motif and texture.',
                'image_path' => '67df348058cce-Further.png',
                'created_at' => '2025-03-22 22:06:56',
                'updated_at' => '2025-03-22 22:06:56',
                'user_id' => 1,
                'artist' => 'Michael Denton',
                'medium' => 'Oil & acrylic',
                'origin' => 'United Kingdom',
                'year' => '2014',
            ],
            [
                'id' => 26,
                'slug' => 'flowers-from-mars',
                'title' => 'Flowers from Mars',
                'description' => 'This is acrylic and glitter painting on high quality linen and custom made canvas. The style is defined by sculptural use of paint. It is 3-D, built-up mixture of many layers of thick gesso, paint, sand and other materials. Finished with a glaze of UV varnish to protect against sunlight and dust damage.',
                'image_path' => '67df34ea7e403-Flowers from Mars.png',
                'created_at' => '2025-03-22 22:08:42',
                'updated_at' => '2025-03-22 22:08:42',
                'user_id' => 1,
                'artist' => 'Pamela Rys',
                'medium' => 'Acrylic and glitter on linen',
                'origin' => 'Poland',
                'year' => '2020',
            ],
            [
                'id' => 27,
                'slug' => 'girl-with-the-red-hat',
                'title' => 'Girl with the Red Hat',
                'description' => 'Girl with the Red Hat is one of Johannes Vermeer’s smallest works, and it is painted on panel rather than on his customary canvas. The girl has turned in her chair and interacts with the viewer through her direct gaze. Girl with the Red Hat is portrayed with unusual spontaneity and informality. The artist’s exquisite use of color is this painting’s most striking characteristic, for both its compositional and its psychological effects. Vermeer concentrated the two major colors in two distinct areas: a vibrant red for the hat and a sumptuous blue for the robe. He then used the intensity of the white cravat to unify the whole.

Following in his father’s footsteps, Vermeer also was an art dealer in Delft. There is no documentation of his artistic training or apprenticeship, but in 1653 he became a master in the Saint Luke’s Guild in Delft; he would serve as head of that guild four times in the 1660s and 1670s. Although he was well regarded in his lifetime, he was heavily in debt when he died in 1675. Only in the late 19th century did Vermeer achieve widespread fame for his intimate genre scenes and quiet cityscapes.',
                'image_path' => '67df366d4342b-Girl with the Red Hat.jpg',
                'created_at' => '2025-03-22 22:15:09',
                'updated_at' => '2025-03-22 22:15:09',
                'user_id' => 1,
                'artist' => 'Johannes Vermeer',
                'medium' => 'Oil on panel',
                'origin' => 'The Netherlands',
                'year' => 'c. 1669',
            ],
        ]);
    }
}