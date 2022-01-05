<?php

namespace App\Entity;

use App\Entity\Article;
use Cocur\Slugify\Slugify;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PageRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints\NotNull;


/**
 * @ORM\Entity(repositoryClass=PageRepository::class)
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity("title")
 */
class Page
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     * max = 60,
     * maxMessage = "Your title cannot be longer than {{ limit }} characters")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $heading;

    /**
     * @ORM\Column(type="text")
     * @Assert\Length(
     * max = 160,
     * maxMessage = "Your metadescription cannot be longer than {{ limit }} characters")
     */
    private $metadescription;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $location;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="page", cascade={"persist", "remove"})
     */
    private $article;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $actionName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $actionLabel;

    /**
     * @ORM\ManyToOne(targetEntity=Page::class)
     * @ORM\JoinColumn(nullable=true)
     */
    private $linkPage;

    /**
     * @ORM\OneToMany(targetEntity=TextArticle::class, mappedBy="page", cascade={"persist", "remove"})
     */
    private $textArticles;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $actionTitle;


    public function __construct()
    {
        $this->article = new ArrayCollection();
        $this->textArticles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getHeading(): ?string
    {
        return $this->heading;
    }

    public function setHeading(string $heading): self
    {
        $this->heading = $heading;

        return $this;
    }

    public function getMetadescription(): ?string
    {
        return $this->metadescription;
    }

    public function setMetadescription(string $metadescription): self
    {
        $this->metadescription = $metadescription;

        return $this;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function createSlug(){

        $slugify = new Slugify();
        $slug = $slugify->slugify($this->title);

        $this->setSlug($slug);
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticle(): Collection
    {
        return $this->article;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->article->contains($article)) {
            $this->article[] = $article;
            $article->setPage($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->article->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getPage() === $this) {
                $article->setPage(null);
            }
        }

        return $this;
    }

    public function getActionName(): ?string
    {
        return $this->actionName;
    }

    public function setActionName(?string $actionName): self
    {
        $this->actionName = $actionName;

        return $this;
    }

    public function getActionLabel(): ?string
    {
        return $this->actionLabel;
    }

    public function setActionLabel(?string $actionLabel): self
    {
        $this->actionLabel = $actionLabel;

        return $this;
    }

    public function getLinkPage(): ?self
    {
        return $this->linkPage;
    }

    public function setLinkPage(?self $linkPage): self
    {
        $this->linkPage = $linkPage;

        return $this;
    }

    /**
     * @return Collection|TextArticle[]
     */
    public function getTextArticles(): Collection
    {
        return $this->textArticles;
    }

    public function addTextArticle(TextArticle $textArticle): self
    {
        if (!$this->textArticles->contains($textArticle)) {
            $this->textArticles[] = $textArticle;
            $textArticle->setPage($this);
        }

        return $this;
    }

    public function removeTextArticle(TextArticle $textArticle): self
    {
        if ($this->textArticles->removeElement($textArticle)) {
            // set the owning side to null (unless already changed)
            if ($textArticle->getPage() === $this) {
                $textArticle->setPage(null);
            }
        }

        return $this;
    }

    public function getActionTitle(): ?string
    {
        return $this->actionTitle;
    }

    public function setActionTitle(?string $actionTitle): self
    {
        $this->actionTitle = $actionTitle;

        return $this;
    }

    public function __toString()
    {
        return $this->title;
    }
}
